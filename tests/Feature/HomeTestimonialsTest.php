<?php

namespace Tests\Feature;

use App\Testimonial;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeTestimonialsTest extends TestCase
{
    use RefreshDatabase;

    public function testHomepageHidesTestimonialsSectionWhenNoneApproved()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertDontSee('testimonials-carousel', false);
    }

    public function testHomepageShowsApprovedTestimonials()
    {
        Testimonial::create([
            'author'      => 'Jane Doe',
            'role'        => 'vaste klant',
            'quote'       => 'Een fijne, ontspannen behandeling met veel persoonlijke aandacht.',
            'approved_at' => now(),
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('testimonials-carousel', false);
        $response->assertSee('Een fijne, ontspannen behandeling met veel persoonlijke aandacht.');
        $response->assertSee('Jane Doe');
    }

    public function testHomepageDoesNotShowUnapprovedTestimonials()
    {
        Testimonial::create([
            'author'      => 'John Doe',
            'role'        => 'bezoeker',
            'quote'       => 'Nog niet goedgekeurde review die niet zichtbaar mag zijn.',
            'approved_at' => null,
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertDontSee('testimonials-carousel', false);
        $response->assertDontSee('Nog niet goedgekeurde review die niet zichtbaar mag zijn.');
    }
}
