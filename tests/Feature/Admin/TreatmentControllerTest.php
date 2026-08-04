<?php

namespace Tests\Feature\Admin;

use App\Treatment;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class TreatmentControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Storage::fake('treatment_images');
        Storage::fake('treatment_images_webp');
    }

    private function actingAsAdmin()
    {
        $user = User::create([
            'name'     => 'Edith',
            'email'    => 'edith@bijedith.nl',
            'password' => Hash::make('secret123'),
        ]);

        return $this->actingAs($user);
    }

    public function testGuestCannotAccessTreatmentIndex()
    {
        $response = $this->get('/admin/treatments');

        $response->assertRedirect('/admin/login');
    }

    public function testAuthenticatedUserCanViewTreatmentIndex()
    {
        Treatment::create($this->treatmentPayload());

        $response = $this->actingAsAdmin()->get('/admin/treatments');

        $response->assertOk();
        $response->assertSeeText('Testbehandeling');
    }

    public function testAuthenticatedUserCanStoreTreatmentWithImage()
    {
        $image = UploadedFile::fake()->image('foto.png');

        $response = $this->actingAsAdmin()->post('/admin/treatments', [
            'category'    => Treatment::CATEGORY_SPA,
            'name'        => 'Nieuwe spa',
            'description' => 'Een fijne behandeling.',
            'image'       => $image,
        ]);

        $response->assertRedirect('/admin/treatments');
        $this->assertDatabaseHas('treatments', [
            'name'     => 'Nieuwe spa',
            'category' => Treatment::CATEGORY_SPA,
        ]);

        $treatment = Treatment::where('name', 'Nieuwe spa')->firstOrFail();
        Storage::disk('treatment_images')->assertExists(basename($treatment->image));
    }

    public function testAuthenticatedUserCanUpdateTreatmentWithoutReplacingImage()
    {
        $treatment = Treatment::create($this->treatmentPayload());

        $response = $this->actingAsAdmin()->put("/admin/treatments/{$treatment->id}", [
            'category'    => $treatment->category,
            'name'        => 'Aangepaste naam',
            'description' => $treatment->description,
        ]);

        $response->assertRedirect('/admin/treatments');
        $this->assertDatabaseHas('treatments', [
            'id'    => $treatment->id,
            'name'  => 'Aangepaste naam',
            'image' => $treatment->image,
        ]);
    }

    public function testAuthenticatedUserCanDeleteTreatment()
    {
        $treatment = Treatment::create($this->treatmentPayload());

        $response = $this->actingAsAdmin()->delete("/admin/treatments/{$treatment->id}");

        $response->assertRedirect('/admin/treatments');
        $this->assertDatabaseMissing('treatments', ['id' => $treatment->id]);
    }

    public function testStoreValidatesRequiredFields()
    {
        $response = $this->actingAsAdmin()->post('/admin/treatments', []);

        $response->assertSessionHasErrors(['category', 'name', 'description', 'image']);
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
