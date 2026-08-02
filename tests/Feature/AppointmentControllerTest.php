<?php

namespace Tests\Feature;

use App\Mail\AppointmentMail;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class AppointmentControllerTest extends TestCase
{
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

        Mail::assertSent(AppointmentMail::class, function ($mail) {
            return $mail->hasTo('jane@example.com');
        });
        Mail::assertSent(AppointmentMail::class, function ($mail) {
            return $mail->hasTo(self::INFO_EMAIL);
        });
        Mail::assertSent(AppointmentMail::class, 2);
    }

    public function testMissingNameFailsValidation()
    {
        Mail::fake();

        $response = $this->post('/mail/appointment', $this->validPayload(['name' => '']));

        $response->assertSessionHasErrors(['name']);
        Mail::assertNothingSent();
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
        Mail::assertSent(AppointmentMail::class, 10);
    }

    public function testMissingMessageIsOptionalAndSucceeds()
    {
        Mail::fake();

        $payload = $this->validPayload();
        unset($payload['message']);

        $response = $this->post('/mail/appointment', $payload);

        $response->assertRedirect('/');
        $response->assertSessionHas('success');
        Mail::assertSent(AppointmentMail::class, 2);
    }
}
