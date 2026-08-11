<?php

namespace Tests\Unit;

use Tests\TestCase;

class ContactConfigTest extends TestCase
{
    private const ENV_KEY = 'CONTACT_PHONE';

    private const PHONE = '0544 37 12 34';

    private const PHONE_LINK = '0544371234';

    private const INTERNATIONAL_PHONE = '+31 6 12 34 56 78';

    private const INTERNATIONAL_PHONE_LINK = '+31612345678';

    private const EMAIL_ENV_KEY = 'CONTACT_EMAIL';

    private const DEFAULT_EMAIL = 'info@bijedith.nl';

    private const EMAIL = 'contact@bijedith.nl';

    protected function tearDown(): void
    {
        putenv(self::ENV_KEY);
        putenv(self::EMAIL_ENV_KEY);

        parent::tearDown();
    }

    private function loadConfig()
    {
        return require config_path('contact.php');
    }

    public function testPhoneIsNullWhenNoNumberIsConfigured()
    {
        $config = $this->loadConfig();

        $this->assertNull($config['phone']);
        $this->assertNull($config['phone_link']);
    }

    public function testPhoneLinkStripsFormattingFromTheConfiguredNumber()
    {
        putenv(self::ENV_KEY . '=' . self::PHONE);

        $config = $this->loadConfig();

        $this->assertSame(self::PHONE, $config['phone']);
        $this->assertSame(self::PHONE_LINK, $config['phone_link']);
    }

    public function testPhoneLinkKeepsTheInternationalPrefix()
    {
        putenv(self::ENV_KEY . '=' . self::INTERNATIONAL_PHONE);

        $config = $this->loadConfig();

        $this->assertSame(self::INTERNATIONAL_PHONE_LINK, $config['phone_link']);
    }

    public function testEmailFallsBackToTheDefaultWhenNoAddressIsConfigured()
    {
        $config = $this->loadConfig();

        $this->assertSame(self::DEFAULT_EMAIL, $config['email']);
    }

    public function testEmailReflectsTheConfiguredEnvironmentValue()
    {
        putenv(self::EMAIL_ENV_KEY . '=' . self::EMAIL);

        $config = $this->loadConfig();

        $this->assertSame(self::EMAIL, $config['email']);
    }
}
