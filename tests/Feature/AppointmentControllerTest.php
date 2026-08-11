<?php

namespace Tests\Feature;

use App\Appointment;
use App\Mail\AppointmentConfirmationMail;
use App\Mail\AppointmentMail;
use App\Treatment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class AppointmentControllerTest extends TestCase
{
    use RefreshDatabase;

    private const INFO_EMAIL = 'info@bijedith.nl';

    private function validPayload(array $overrides = [])
    {
        return array_merge([
            'name'      => 'Jane Doe',
            'email'     => 'jane@example.com',
            'procedure' => 'pedicure',
            'phone'     => '0612345678',
            'opt_in'    => 1,
        ], $overrides);
    }

    public function testValidPayloadSendsAppointmentMailsAndRedirectsWithSuccess()
    {
        Mail::fake();

        $response = $this->post('/mail/appointment', $this->validPayload());

        $response->assertRedirect('/');
        $response->assertSessionHas('success');

        Mail::assertSent(AppointmentConfirmationMail::class, function ($mail) {
            return $mail->hasTo('jane@example.com');
        });
        Mail::assertSent(AppointmentMail::class, function ($mail) {
            return $mail->hasTo(self::INFO_EMAIL) && $mail->hasReplyTo('jane@example.com');
        });
    }

    public function testValidPayloadPersistsAppointment()
    {
        Mail::fake();

        $this->post('/mail/appointment', $this->validPayload());

        $this->assertDatabaseHas('appointments', [
            'name'      => 'Jane Doe',
            'email'     => 'jane@example.com',
            'procedure' => 'pedicure',
            'phone'     => '0612345678',
        ]);
    }

    public function testAppointmentIsStillPersistedWhenMailSendingFails()
    {
        Mail::shouldReceive('to')->andThrow(new \RuntimeException('SMTP unavailable'));

        $response = $this->post('/mail/appointment', $this->validPayload());

        $response->assertRedirect('/');
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('appointments', [
            'email' => 'jane@example.com',
        ]);
        $this->assertSame(1, Appointment::count());
    }

    public function testMissingNameFailsValidation()
    {
        Mail::fake();

        $response = $this->post('/mail/appointment', $this->validPayload(['name' => '']));

        $response->assertSessionHasErrors(['name' => 'Het naam veld is verplicht.']);
        Mail::assertNothingSent();
        $this->assertSame(0, Appointment::count());
    }

    public function testMissingNameValidationMessageIsInDutch()
    {
        Mail::fake();

        $response = $this->post('/mail/appointment', $this->validPayload(['name' => '']));

        $response->assertSessionHasErrors(['name']);
        $message = session('errors')->first('name');
        $this->assertStringNotContainsString('field is required', $message);
        $this->assertStringContainsString('naam is verplicht', $message);
    }

    public function testMissingEmailFailsValidation()
    {
        Mail::fake();

        $response = $this->post('/mail/appointment', $this->validPayload(['email' => '']));

        $response->assertSessionHasErrors(['email']);
        Mail::assertNothingSent();
    }

    public function testMissingProcedureFailsValidation()
    {
        Mail::fake();

        $response = $this->post('/mail/appointment', $this->validPayload(['procedure' => '']));

        $response->assertSessionHasErrors(['procedure']);
        Mail::assertNothingSent();
    }

    public function testMissingPhoneFailsValidation()
    {
        Mail::fake();

        $response = $this->post('/mail/appointment', $this->validPayload(['phone' => '']));

        $response->assertSessionHasErrors(['phone']);
        Mail::assertNothingSent();
    }

    public function testMissingOptInFailsValidation()
    {
        Mail::fake();

        $response = $this->post('/mail/appointment', $this->validPayload(['opt_in' => '']));

        $response->assertSessionHasErrors(['opt_in']);
        Mail::assertNothingSent();
    }

    public function testInvalidProcedureFailsValidation()
    {
        Mail::fake();

        $response = $this->post('/mail/appointment', $this->validPayload(['procedure' => 'massage']));

        $response->assertSessionHasErrors(['procedure' => 'Het geselecteerde behandeling is ongeldig.']);
        Mail::assertNothingSent();
    }

    public function testNonNumericPhoneFailsValidation()
    {
        Mail::fake();

        $response = $this->post('/mail/appointment', $this->validPayload(['phone' => 'abcdefghij']));

        $response->assertSessionHasErrors(['phone']);
        Mail::assertNothingSent();
    }

    public function testProcedureAcceptsAnExistingTreatmentName()
    {
        Mail::fake();

        $treatment = Treatment::create([
            'type'        => 'spa',
            'name'        => 'Sparkling-arrangement',
            'description' => 'Beschrijving',
            'image'       => '/assets/pictures/spa.png',
        ]);

        $response = $this->post('/mail/appointment', $this->validPayload(['procedure' => $treatment->name]));

        $response->assertRedirect('/');
        $response->assertSessionHas('success');
    }

    public function testProcedureRejectsANameThatIsNotAKnownTreatmentWhenTreatmentsExist()
    {
        Mail::fake();

        Treatment::create([
            'type'        => 'spa',
            'name'        => 'Sparkling-arrangement',
            'description' => 'Beschrijving',
            'image'       => '/assets/pictures/spa.png',
        ]);

        $response = $this->post('/mail/appointment', $this->validPayload(['procedure' => 'pedicure']));

        $response->assertSessionHasErrors(['procedure']);
        Mail::assertNothingSent();
    }

    public function testProcedureAcceptsAFallbackProcedureWhenNoTreatmentsExist()
    {
        Mail::fake();

        Treatment::query()->delete();
        $this->assertSame(0, Treatment::count());

        $response = $this->post('/mail/appointment', $this->validPayload(['procedure' => 'pedicure']));

        $response->assertRedirect('/');
        $response->assertSessionHas('success');
    }

    public function testProcedureRejectsANameThatIsNotAFallbackProcedureWhenNoTreatmentsExist()
    {
        Mail::fake();

        Treatment::query()->delete();
        $this->assertSame(0, Treatment::count());

        $response = $this->post('/mail/appointment', $this->validPayload(['procedure' => 'massage']));

        $response->assertSessionHasErrors(['procedure']);
        Mail::assertNothingSent();
    }

    public function testSixthSubmissionWithinOneMinuteIsRateLimited()
    {
        Mail::fake();

        for ($i = 0; $i < 5; $i++) {
            $response = $this->post('/mail/appointment', $this->validPayload());
            $response->assertRedirect('/');
        }

        $response = $this->post('/mail/appointment', $this->validPayload());

        $response->assertStatus(429);
        Mail::assertSent(AppointmentConfirmationMail::class, 5);
        Mail::assertSent(AppointmentMail::class, 5);
    }

    public function testMissingMessageIsOptionalAndSucceeds()
    {
        Mail::fake();

        $payload = $this->validPayload();
        unset($payload['message']);

        $response = $this->post('/mail/appointment', $payload);

        $response->assertRedirect('/');
        $response->assertSessionHas('success');
        Mail::assertSent(AppointmentConfirmationMail::class, function ($mail) {
            return $mail->hasTo('jane@example.com');
        });
        Mail::assertSent(AppointmentMail::class, function ($mail) {
            return $mail->hasTo(self::INFO_EMAIL);
        });
    }
}
