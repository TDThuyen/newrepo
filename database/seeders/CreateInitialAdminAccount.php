<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateInitialAdminAccount extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::unguard();

        User::create([
            'email' => 'admin@10',
            'password' => bcrypt('12345678910'),
            'first_name' => 'Admin',
            'last_name' => 'Account',
            'is_active' => true,
            'username' => 'johndoe',
            'is_admin' => true,
        ]);
    }
}
