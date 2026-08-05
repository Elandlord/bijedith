<?php

namespace Tests\Feature;

use App\Treatment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeControllerTreatmentsTest extends TestCase
{
    use RefreshDatabase;

    public function testBehandelingenPageListsOnlyPedicureTreatments()
    {
        $pedicure = Treatment::create([
            'type'        => 'pedicure',
            'name'        => 'Pedicurebehandeling',
            'description' => 'Beschrijving pedicure',
            'image'       => '/assets/pictures/pedicure.png',
        ]);
        $spa = Treatment::create([
            'type'        => 'spa',
            'name'        => 'Voetmassage',
            'description' => 'Beschrijving spa',
            'image'       => '/assets/pictures/spa.png',
        ]);

        $response = $this->get('/behandelingen');

        $response->assertOk();
        $response->assertSee($pedicure->name);
        $response->assertDontSee($spa->name);
    }

    public function testSpaArrangementenPageListsOnlySpaTreatments()
    {
        $pedicure = Treatment::create([
            'type'        => 'pedicure',
            'name'        => 'Pedicurebehandeling',
            'description' => 'Beschrijving pedicure',
            'image'       => '/assets/pictures/pedicure.png',
        ]);
        $spa = Treatment::create([
            'type'        => 'spa',
            'name'        => 'Voetmassage',
            'description' => 'Beschrijving spa',
            'image'       => '/assets/pictures/spa.png',
        ]);

        $response = $this->get('/spa-arrangementen');

        $response->assertOk();
        $response->assertSee($spa->name);
        $response->assertDontSee($pedicure->name);
    }
}
