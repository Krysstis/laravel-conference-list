<?php

return [
    'title' => 'Konferencijų valdymo sistema',
    'list' => 'Visi renginiai',
    'add_new' => 'Naujas renginys',
    'create' => 'Kurti renginį',
    'edit' => 'Keisti renginio informaciją',
    'no_conferences' => 'Šiuo metu renginių nėra',

    'fields' => [
        'title' => 'Pavadinimas',
        'description' => 'Aprašymas',
        'date' => 'Renginio data',
        'address' => 'Vieta',
        'participant_count' => 'Dalyvių skaičius',
    ],

    'actions' => [
        'header' => 'Veiksmai',
        'create' => 'Sukurti',
        'update' => 'Išsaugoti',
        'edit' => 'Keisti',
        'delete' => 'Ištrinti',
        'view' => 'Žiūrėti',
        'back' => 'Atgal',
        'cancel' => 'Atšaukti',
    ],

    'messages' => [
        'created' => 'Renginys sukurtas sėkmingai',
        'updated' => 'Informacija atnaujinta',
        'deleted' => 'Renginys ištrintas',
        'confirm_delete' => 'Ar tikrai norite ištrinti renginį',
        'confirm_delete_title' => 'Patvirtinkite ištrynimą',
    ],

    'validation' => [
        'title_required' => 'Prašome įvesti pavadinimą',
        'title_max' => 'Pavadinimas negali viršyti 255 simbolių',
        'description_required' => 'Aprašymo laukas negali būti tuščias',
        'date_required' => 'Būtina nurodyti datą',
        'date_date' => 'Netinkamas datos formatas',
        'address_required' => 'Reikalinga nurodyti vietą',
        'address_max' => 'Vietos laukas negali viršyti 255 simbolių',
        'participant_count_integer' => 'Dalyvių skaičius turi būti sveikasis skaičius',
        'participant_count_min' => 'Dalyvių skaičius turi būti bent 1',
    ],
];
