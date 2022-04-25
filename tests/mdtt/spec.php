<?php

return [
    'databases' => [
        'source_db' => [
            'database' => "db_drupal7",
            'username' => "db",
            'password' => "db",
            'host' => "127.0.0.1",
            'port' => "59002",
        ],
        "destination_db" => [
            'database' => "db",
            'username' => "db",
            'password' => "db",
            'host' => "127.0.0.1",
            'port' => "59002",
        ],
    ],
    'http' => [
        'source' => [
            'username' => 'username',
            'password' => 'password',
        ],
        'destination' => [
            'username' => 'username',
            'password' => 'password',
            'protocol' => 'ntlm',
        ]
    ]
];
