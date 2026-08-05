<?php

namespace Tests\Feature\Admin;

use App\Treatment;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class TreatmentControllerTest extends TestCase
{
    use RefreshDatabase;

    private function user(): User
    {
        return User::create([
            'name'     => 'Edith',
            'email'    => 'edith@bijedith.nl',
            'password' => 'irrelevant-for-these-tests',
        ]);
    }

    public function testGuestIsRedirectedToLoginForIndex()
    {
        $response = $this->get('/admin/treatments');

        $response->assertRedirect('/login');
    }

    public function testAuthenticatedUserCanCreateTreatment()
    {
        Storage::fake('public');

        $response = $this->actingAs($this->user())->post('/admin/treatments', [
            'type'        => 'pedicure',
            'name'        => 'Nieuwe behandeling',
            'description' => 'Een omschrijving',
            'image'       => UploadedFile::fake()->image('treatment.jpg'),
        ]);

        $response->assertRedirect(route('admin.treatments.index'));
        $this->assertDatabaseHas('treatments', [
            'type' => 'pedicure',
            'name' => 'Nieuwe behandeling',
        ]);

        $treatment = Treatment::first();
        Storage::disk('public')->assertExists($treatment->image);
    }

    public function testCreatingTreatmentWithoutImageFailsValidation()
    {
        Storage::fake('public');

        $response = $this->actingAs($this->user())->post('/admin/treatments', [
            'type'        => 'pedicure',
            'name'        => 'Nieuwe behandeling',
            'description' => 'Een omschrijving',
        ]);

        $response->assertSessionHasErrors(['image']);
        $this->assertDatabaseMissing('treatments', ['name' => 'Nieuwe behandeling']);
    }

    public function testAuthenticatedUserCanUpdateTreatmentWithoutReplacingImage()
    {
        Storage::fake('public');

        $treatment = Treatment::create([
            'type'        => 'spa',
            'name'        => 'Oude naam',
            'description' => 'Oude omschrijving',
            'image'       => UploadedFile::fake()->image('old.jpg')->store('treatments', 'public'),
        ]);

        $response = $this->actingAs($this->user())->put("/admin/treatments/{$treatment->id}", [
            'type'        => 'spa',
            'name'        => 'Nieuwe naam',
            'description' => 'Oude omschrijving',
        ]);

        $response->assertRedirect(route('admin.treatments.index'));
        $this->assertDatabaseHas('treatments', [
            'id'   => $treatment->id,
            'name' => 'Nieuwe naam',
        ]);
    }

    public function testAuthenticatedUserCanDeleteTreatment()
    {
        Storage::fake('public');

        $treatment = Treatment::create([
            'type'        => 'spa',
            'name'        => 'Te verwijderen',
            'description' => 'Omschrijving',
            'image'       => UploadedFile::fake()->image('old.jpg')->store('treatments', 'public'),
        ]);

        $response = $this->actingAs($this->user())->delete("/admin/treatments/{$treatment->id}");

        $response->assertRedirect(route('admin.treatments.index'));
        $this->assertDatabaseMissing('treatments', ['id' => $treatment->id]);
        Storage::disk('public')->assertMissing($treatment->image);
    }
}
