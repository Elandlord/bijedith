<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactPhoneTest extends TestCase
{
    use RefreshDatabase;

    private const PHONE = '0544 37 12 34';

    private const PHONE_LINK = 'tel:0544371234';

    private const PAGES = ['/', '/contact'];

    private function configurePhone()
    {
        config([
            'contact.phone'      => self::PHONE,
            'contact.phone_link' => '0544371234',
        ]);
    }

    private function hidePhone()
    {
        config([
            'contact.phone'      => null,
            'contact.phone_link' => null,
        ]);
    }

    public function testConfiguredPhoneNumberIsShownAsACallableLink()
    {
        $this->configurePhone();

        foreach (self::PAGES as $page) {
            $response = $this->get($page);

            $response->assertStatus(200);
            $response->assertSee(self::PHONE_LINK, false);
            $response->assertSee(self::PHONE, false);
        }
    }

    public function testNoPhoneNumberIsRenderedWhenNoneIsConfigured()
    {
        $this->hidePhone();

        foreach (self::PAGES as $page) {
            $response = $this->get($page);

            $response->assertStatus(200);
            $response->assertDontSee('tel:', false);
        }
    }
}
