<?php




return [
    'database' => [
        'connection' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'dbname' => 'task_scandiweb',
        'uname' => 'root',
        'password' => '',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];