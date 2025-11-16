<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Selonija - Latviešu studentu korporācija',
    'description' => 'Selonija ir vecākā latviešu studentu korporācija, tā ir dibināta 1880.gada 24.novembrī pie Rīgas Politehniskā institūta.',
    'collections' => [
        'photos' =>[
            'path' => '_photos/{directory}/{filename}',
        ],
        'prezidijs' =>[
            'path' => '_prezidijs/{directory}/{filename}',
        ],
    ],
];
