<?php

namespace Tests\Feature;

use App\Treatment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TreatmentContentTest extends TestCase
{
    use RefreshDatabase;

    public function testBehandelingenPageOnlyShowsBehandelingTreatments()
    {
        Treatment::create($this->treatmentPayload(['category' => Treatment::CATEGORY_BEHANDELING, 'name' => 'Pedicurebehandeling']));
        Treatment::create($this->treatmentPayload(['category' => Treatment::CATEGORY_SPA, 'name' => 'Sparkling-arrangement']));

        $response = $this->get('/behandelingen');

        $response->assertOk();
        $response->assertSeeText('Pedicurebehandeling');
        $response->assertDontSeeText('Sparkling-arrangement');
    }

    public function testSpaArrangementenPageOnlyShowsSpaTreatments()
    {
        Treatment::create($this->treatmentPayload(['category' => Treatment::CATEGORY_BEHANDELING, 'name' => 'Pedicurebehandeling']));
        Treatment::create($this->treatmentPayload(['category' => Treatment::CATEGORY_SPA, 'name' => 'Sparkling-arrangement']));

        $response = $this->get('/spa-arrangementen');

        $response->assertOk();
        $response->assertSeeText('Sparkling-arrangement');
        $response->assertDontSeeText('Pedicurebehandeling');
    }

    private function treatmentPayload(array $overrides = []): array
    {
        return array_merge([
            'category'    => Treatment::CATEGORY_BEHANDELING,
            'name'        => 'Testbehandeling',
            'description' => 'Een test beschrijving.',
            'image'       => '/assets/pictures/test.png',
            'webp_image'  => '/assets/pictures/webp/test.webp',
        ], $overrides);
    }
}
