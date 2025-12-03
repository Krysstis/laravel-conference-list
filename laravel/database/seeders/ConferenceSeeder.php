<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Conference;

class ConferenceSeeder extends Seeder
{
    public function run(): void
    {
        $conferencesData = [
            [
                'title' => 'Kvantinės kriptografijos perspektyvos',
                'description' => 'Tarptautinis simpoziumas, skirtas kvantinių kompiuterių įtakai šiuolaikinei kriptografijai ir naujiems saugumo protokolams aptarti.',
                'date' => '2025-03-14',
                'address' => 'Vilnius, Universiteto g. 3',
                'participant_count' => 175,
            ],
            [
                'title' => 'Robotika ir automatizacija gamyboje',
                'description' => 'Pramoninės automatizavimo sistemos, kooperuojantys robotai ir dirbtinio intelekto integravimas į gamybos procesus.',
                'date' => '2025-05-22',
                'address' => 'Panevėžys, Pramonės g. 44',
                'participant_count' => 220,
            ],
            [
                'title' => 'Skaitmeninė medicina ir e-sveikata',
                'description' => 'Inovatyviausios medicinos technologijos: telemedecina, diagnostikos algoritmai ir pacientų duomenų valdymo sprendimai.',
                'date' => '2025-07-16',
                'address' => 'Kaunas, Ateities al. 7',
                'participant_count' => 285,
            ],
            [
                'title' => 'Žalioji energetika ir IoT ekosistemos',
                'description' => 'Išmaniųjų tinklų vystymas, atsinaujinančių išteklių valdymas ir IoT sprendimai tvariam energijos vartojimui.',
                'date' => '2025-09-11',
                'address' => 'Klaipėda, Naujojo uosto g. 28',
                'participant_count' => 340,
            ],
            [
                'title' => 'Virtualios realybės edukaciniai sprendimai',
                'description' => 'VR ir AR technologijų pritaikymas švietimo sistemoje, mokymosi metodikų evoliucija ir imersyvus turinys.',
                'date' => '2025-11-27',
                'address' => 'Vilnius, Olimpiečių g. 12',
                'participant_count' => 195,
            ],
        ];

        foreach ($conferencesData as $data) {
            Conference::create($data);
        }
    }
}
