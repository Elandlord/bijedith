<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the admin user used to log in to /admin.
     *
     * @return void
     */
    public function run()
    {
        $password = env('ADMIN_PASSWORD');

        if (! $password) {
            $this->command->error('Set ADMIN_PASSWORD in your .env before running this seeder.');

            return;
        }

        User::firstOrCreate(
            ['email' => env('ADMIN_EMAIL', 'edith@bijedith.nl')],
            ['name' => 'Edith', 'password' => Hash::make($password)]
        );
    }
}
