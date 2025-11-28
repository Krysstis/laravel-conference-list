<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Sistemos valdytojas',
            'email' => 'valdytojas@konferencijos.lt',
            'password' => Hash::make('slaptazodis123'),
        ]);
    }
}
