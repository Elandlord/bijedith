<?php

namespace Tests\Feature\Auth;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function testGuestCanViewLoginForm()
    {
        $response = $this->get('/admin/login');

        $response->assertOk();
    }

    public function testValidCredentialsLogInAndRedirectToTreatments()
    {
        $user = $this->createUser();

        $response = $this->post('/admin/login', [
            'email'    => $user->email,
            'password' => 'secret123',
        ]);

        $response->assertRedirect('/admin/treatments');
        $this->assertAuthenticatedAs($user);
    }

    public function testInvalidCredentialsFailValidation()
    {
        $user = $this->createUser();

        $response = $this->post('/admin/login', [
            'email'    => $user->email,
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function testGuestIsRedirectedToLoginWhenVisitingAdminArea()
    {
        $response = $this->get('/admin/treatments');

        $response->assertRedirect('/admin/login');
    }

    public function testAuthenticatedUserCanLogOut()
    {
        $user = $this->createUser();

        $response = $this->actingAs($user)->post('/admin/logout');

        $response->assertRedirect('/admin/login');
        $this->assertGuest();
    }

    private function createUser(): User
    {
        return User::create([
            'name'     => 'Edith',
            'email'    => 'edith@bijedith.nl',
            'password' => Hash::make('secret123'),
        ]);
    }
}
