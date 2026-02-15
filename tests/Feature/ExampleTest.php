<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testHomePageLoadsSuccessfully()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testHomepageShowsModernizedNavigationAndCta()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Bekijk behandelingen');
        $response->assertSee('Plan contact');
        $response->assertSee('Spa-arrangementen');
        $response->assertSee('Tarieven');
    }
}
