<?php

namespace Tests\Feature;

use Tests\TestCase;

class DebugRoutesTest extends TestCase
{
    public function testPhpinfoRouteIsNotRegistered()
    {
        $response = $this->get('/phpinfo');

        $response->assertStatus(404);
    }
}
