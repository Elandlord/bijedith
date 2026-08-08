<?php

namespace Tests\Feature\Auth;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testUserCanLogInWithValidCredentials()
    {
        $user = User::create([
            'name'     => 'Edith',
            'email'    => 'edith@bijedith.nl',
            'password' => Hash::make('correct-password'),
        ]);

        $response = $this->post('/login', [
            'email'    => $user->email,
            'password' => 'correct-password',
        ]);

        $response->assertRedirect(route('admin.treatments.index'));
        $this->assertAuthenticatedAs($user);
    }

    public function testUserCannotLogInWithInvalidCredentials()
    {
        User::create([
            'name'     => 'Edith',
            'email'    => 'edith@bijedith.nl',
            'password' => Hash::make('correct-password'),
        ]);

        $response = $this->post('/login', [
            'email'    => 'edith@bijedith.nl',
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrors(['email']);
        $this->assertGuest();
    }

    public function testSixthSubmissionWithinOneMinuteIsRateLimited()
    {
        User::create([
            'name'     => 'Edith',
            'email'    => 'edith@bijedith.nl',
            'password' => Hash::make('correct-password'),
        ]);

        for ($i = 0; $i < 5; $i++) {
            $response = $this->post('/login', [
                'email'    => 'edith@bijedith.nl',
                'password' => 'wrong-password',
            ]);
            $response->assertSessionHasErrors(['email']);
        }

        $response = $this->post('/login', [
            'email'    => 'edith@bijedith.nl',
            'password' => 'wrong-password',
        ]);

        $response->assertStatus(429);
    }

    public function testAuthenticatedUserCanLogOut()
    {
        $user = User::create([
            'name'     => 'Edith',
            'email'    => 'edith@bijedith.nl',
            'password' => Hash::make('correct-password'),
        ]);

        $response = $this->actingAs($user)->post('/logout');

        $response->assertRedirect(route('login'));
        $this->assertGuest();
    }
}
