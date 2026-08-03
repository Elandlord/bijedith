<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class AppointmentFallbackTest extends TestCase
{
    private const FALLBACK_ID = 'id="afspraak-formulier"';

    public function testHomepageRendersTheFallbackFormHiddenByDefault()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee(self::FALLBACK_ID, false);
        $response->assertSee('data-booking-fallback hidden', false);
        $response->assertSee('action="' . route('mail.appointment') . '"', false);
        $response->assertSee('name="_token"', false);
    }

    public function testContactPageRendersTheFallbackForm()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee(self::FALLBACK_ID, false);
        $response->assertSee('action="' . route('mail.appointment') . '"', false);
    }

    public function testEveryPageShipsTheWidgetFailureDetectionScript()
    {
        $response = $this->get('/');

        $response->assertSee('onerror="window.salonizedWidgetFailed()"', false);
        $response->assertSee('[data-booking-fallback][hidden] { display: block !important; }', false);
    }

    public function testFallbackFormIsRevealedWhenSubmissionFailsValidation()
    {
        Mail::fake();

        $this->from('/')->post('/mail/appointment', ['name' => '']);

        $response = $this->get('/');

        $response->assertSee(self::FALLBACK_ID, false);
        $response->assertDontSee('data-booking-fallback hidden', false);
    }
}
