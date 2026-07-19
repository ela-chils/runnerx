<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            MasterDataSeeder::class,
        ]);


        // User Admin
        User::create([
            'name' => 'Admin RunnerX',
            'username' => 'admin',
            'email' => 'admin@runnerx.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);


        // User Peserta
        User::create([
            'name' => 'Peserta RunnerX',
            'username' => 'peserta',
            'email' => 'peserta@runnerx.com',
            'password' => Hash::make('peserta123'),
            'role' => 'peserta',
        ]);
    }
}