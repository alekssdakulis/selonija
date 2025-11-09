<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Jigsaw',
    'description' => 'Website description.',
    'collections' => [
        'photos' =>[
            'path' => '_photos/{directory}/{filename}',
        ],
        'prezidijs' =>[
            'path' => '_prezidijs/{directory}/{filename}',
        ],
    ],
];
