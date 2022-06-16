<?php

$env = include_once '.env.php';

return [
    'validation_rules' => [
        'email' => '',
        'grade' => '',
        'name' => '',
    ],
    'database_connection' => [
        'db_name' => $env['db_name'],
    ],
];
