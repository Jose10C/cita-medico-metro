<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'c2-jose@hotmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('c2-jose@hotmail.com'),
            'dni' => '12345678',
            'direccion' => 'Av. Siempre Viva 123',
            'telefono' => '123456789',
            'rol' => 'admin',

        ]);
        User::create([
            'name' => 'Medico',
            'email' => 'medico@hotmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('medico@hotmail.com'),
            'rol' => 'medico',

        ]);
        User::create([
            'name' => 'Paciente',
            'email' => 'paciente@hotmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('paciente@hotmail.com'),
            'rol' => 'paciente',

        ]);
        
        User::factory()
        ->count(50)
        ->state(['rol' => 'paciente'])
        ->create();
    }
}
