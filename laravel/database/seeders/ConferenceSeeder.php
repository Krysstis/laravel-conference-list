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
                'title' => 'Programavimo kalbų konferencija 2025',
                'description' => 'Kasmetinis susitikimas, kuriame aptariamos naujausios programavimo kalbų tendencijos, įrankiai ir geriausia praktika įvairiose srityse.',
                'date' => '2025-04-12',
                'address' => 'Vilnius, Gedimino pr. 15',
            ],
            [
                'title' => 'Duomenų bazių optimizavimo seminaras',
                'description' => 'Praktinis seminaras apie efektyvų darbą su duomenų bazėmis, optimizavimo metodus ir naujausias SQL technologijas.',
                'date' => '2025-06-08',
                'address' => 'Kaunas, Savanorių pr. 28',
            ],
            [
                'title' => 'Kibernetinio saugumo forumas',
                'description' => 'Forumas skirtas informacijos saugumui aptarti, naujausiems grėsmių tipams ir apsaugos metodams pristatyti.',
                'date' => '2025-08-22',
                'address' => 'Klaipėda, Taikos pr. 101',
            ],
            [
                'title' => 'Dirbtinio intelekto technologijos',
                'description' => 'Dirbtinio intelekto ir mašininio mokymosi konferencija, pristatanti naujausius pasiekimus ir praktines aplikacijas.',
                'date' => '2025-10-05',
                'address' => 'Vilnius, Lvovo g. 25',
            ],
            [
                'title' => 'Backend Development 2025',
                'description' => 'Konferencija apie serverio pusės kūrimą, API projektavimą, mikroservisų architektūrą ir debesų kompiuterijos sprendimus.',
                'date' => '2025-12-18',
                'address' => 'Šiauliai, Tilžės g. 109',
            ],
        ];

        foreach ($conferencesData as $data) {
            Conference::create($data);
        }
    }
}
