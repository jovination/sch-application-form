<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $adminEmail = config('app.admin_email', env('ADMIN_EMAIL', 'admin@example.com'));
        $adminPassword = config('app.admin_password', env('ADMIN_PASSWORD', 'password'));

        $user = User::firstOrCreate(
            ['email' => $adminEmail],
            [
                'name' => 'Platform Admin',
                'password' => Hash::make($adminPassword),
            ]
        );

        if (! $user->hasRole('admin')) {
            $user->assignRole('admin');
        }
    }
}


