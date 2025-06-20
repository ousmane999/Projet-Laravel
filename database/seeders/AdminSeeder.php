<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'prenom' => 'Ousmane',
            'nom' => 'Ka',
            'email' => 'gestionnaire@gmail.com',
            'telephone' => '784044458',
            'email_verified_at' => now(),
            'role' => 'gestionnaire',
            'password' => Hash::make('Admin123.'),
        ]);
        $user->assignRole('gestionnaire');
    }
}
