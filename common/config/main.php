<?php

return [
    'name' => 'testrest',
    'timeZone' => 'Europe/Moscow',
    'language' => 'ru-RU',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=testrest',
            'username' => 'root',
            'password' => '739618',
            'charset' => 'utf8',
        ],
    ],
    'params' => [
        'company' => 'Andrey Zagorets',
        'author' => 'Andrey Zagorets',
    ]
];
