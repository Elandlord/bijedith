<?php

namespace Tests\Unit;

use Tests\TestCase;

class HoneypotConfigTest extends TestCase
{
    private const ENV_KEY = 'HONEYPOT_SECONDS';

    private const DEFAULT_SECONDS = 1;

    private const OVERRIDE_SECONDS = '5';

    protected function tearDown(): void
    {
        putenv(self::ENV_KEY);

        parent::tearDown();
    }

    public function testAmountOfSecondsDefaultsToOne()
    {
        $this->assertSame(self::DEFAULT_SECONDS, config('honeypot.amount_of_seconds'));
    }

    public function testAmountOfSecondsIsReadFromTheEnvironment()
    {
        putenv(self::ENV_KEY . '=' . self::OVERRIDE_SECONDS);

        $config = require config_path('honeypot.php');

        $this->assertSame(self::OVERRIDE_SECONDS, $config['amount_of_seconds']);
    }
}
