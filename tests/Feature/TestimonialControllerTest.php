<?php

namespace Tests\Feature;

use App\Mail\TestimonialApprovalMail;
use App\Testimonial;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class TestimonialControllerTest extends TestCase
{
    use RefreshDatabase;

    private const INFO_EMAIL = 'info@bijedith.nl';

    private function validPayload(array $overrides = [])
    {
        return array_merge([
            'author' => 'Jane Doe',
            'role'   => 'vaste klant',
            'quote'  => 'Een fijne, ontspannen behandeling met veel persoonlijke aandacht.',
        ], $overrides);
    }

    public function testCreatePageIsAccessible()
    {
        $response = $this->get('/ervaring-delen');

        $response->assertStatus(200);
        $response->assertSee('action="' . route('mail.testimonial') . '"', false);
    }

    public function testValidPayloadCreatesUnapprovedTestimonialAndSendsApprovalMail()
    {
        Mail::fake();

        $response = $this->post('/mail/testimonial', $this->validPayload());

        $response->assertRedirect(route('testimonials.create'));
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('testimonials', [
            'author'      => 'Jane Doe',
            'role'        => 'vaste klant',
            'approved_at' => null,
        ]);

        Mail::assertSent(TestimonialApprovalMail::class, function ($mail) {
            return $mail->hasTo(self::INFO_EMAIL);
        });
    }

    public function testMissingAuthorFailsValidation()
    {
        Mail::fake();

        $response = $this->post('/mail/testimonial', $this->validPayload(['author' => '']));

        $response->assertSessionHasErrors(['author']);
        Mail::assertNothingSent();
    }

    public function testMissingQuoteFailsValidation()
    {
        Mail::fake();

        $response = $this->post('/mail/testimonial', $this->validPayload(['quote' => '']));

        $response->assertSessionHasErrors(['quote']);
        Mail::assertNothingSent();
    }

    public function testTooShortQuoteFailsValidation()
    {
        Mail::fake();

        $response = $this->post('/mail/testimonial', $this->validPayload(['quote' => 'Te kort']));

        $response->assertSessionHasErrors(['quote']);
        Mail::assertNothingSent();
    }

    public function testApprovedAtCannotBeSetViaSubmission()
    {
        Mail::fake();

        $response = $this->post('/mail/testimonial', $this->validPayload(['approved_at' => now()]));

        $response->assertRedirect(route('testimonials.create'));
        $this->assertDatabaseHas('testimonials', [
            'author'      => 'Jane Doe',
            'approved_at' => null,
        ]);
    }

    public function testMissingRoleIsOptionalAndSucceeds()
    {
        Mail::fake();

        $payload = $this->validPayload();
        unset($payload['role']);

        $response = $this->post('/mail/testimonial', $payload);

        $response->assertRedirect(route('testimonials.create'));
        $this->assertDatabaseHas('testimonials', ['author' => 'Jane Doe', 'role' => null]);
    }

    public function testSixthSubmissionWithinOneMinuteIsRateLimited()
    {
        Mail::fake();

        for ($i = 0; $i < 5; $i++) {
            $response = $this->post('/mail/testimonial', $this->validPayload());
            $response->assertRedirect(route('testimonials.create'));
        }

        $response = $this->post('/mail/testimonial', $this->validPayload());

        $response->assertStatus(429);
        Mail::assertSent(TestimonialApprovalMail::class, 5);
    }

    public function testValidSignedUrlApprovesTheTestimonial()
    {
        $testimonial = Testimonial::create($this->validPayload());
        $url = URL::signedRoute('testimonials.approve', ['testimonial' => $testimonial->id]);

        $response = $this->post($url);

        $response->assertRedirect(route('home'));
        $this->assertNotNull($testimonial->fresh()->approved_at);
    }

    public function testUnsignedApprovalUrlIsForbidden()
    {
        $testimonial = Testimonial::create($this->validPayload());

        $response = $this->post("/testimonials/{$testimonial->id}/approve");

        $response->assertStatus(403);
        $this->assertNull($testimonial->fresh()->approved_at);
    }

    public function testExpiredApprovalUrlIsForbidden()
    {
        $testimonial = Testimonial::create($this->validPayload());
        $url = URL::temporarySignedRoute('testimonials.approve', now()->addDays(7), ['testimonial' => $testimonial->id]);

        $response = $this->travel(8)->days()->post($url);

        $response->assertStatus(403);
        $this->assertNull($testimonial->fresh()->approved_at);
    }

    public function testValidSignedUrlRejectsAndDeletesTheTestimonial()
    {
        $testimonial = Testimonial::create($this->validPayload());
        $url = URL::signedRoute('testimonials.reject', ['testimonial' => $testimonial->id]);

        $response = $this->post($url);

        $response->assertRedirect(route('home'));
        $this->assertDatabaseMissing('testimonials', ['id' => $testimonial->id]);
    }

    public function testUnsignedRejectionUrlIsForbidden()
    {
        $testimonial = Testimonial::create($this->validPayload());

        $response = $this->post("/testimonials/{$testimonial->id}/reject");

        $response->assertStatus(403);
        $this->assertDatabaseHas('testimonials', ['id' => $testimonial->id]);
    }

    public function testExpiredRejectionUrlIsForbidden()
    {
        $testimonial = Testimonial::create($this->validPayload());
        $url = URL::temporarySignedRoute('testimonials.reject', now()->addDays(7), ['testimonial' => $testimonial->id]);

        $response = $this->travel(8)->days()->post($url);

        $response->assertStatus(403);
        $this->assertDatabaseHas('testimonials', ['id' => $testimonial->id]);
    }

    public function testValidSignedReviewUrlDoesNotMutateTheTestimonial()
    {
        $testimonial = Testimonial::create($this->validPayload());
        $url = URL::signedRoute('testimonials.review', ['testimonial' => $testimonial->id]);

        $response = $this->get($url);

        $response->assertStatus(200);
        $this->assertNull($testimonial->fresh()->approved_at);
        $this->assertDatabaseHas('testimonials', ['id' => $testimonial->id]);
    }
}
