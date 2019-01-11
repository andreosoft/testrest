<?php

return [
    'id' => 'app-rest',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'rest\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableSession' => false,
            'loginUrl' => null
        ],
        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                'GET,HEAD currency/<id>' => 'currency/view',
                'GET,HEAD currencies' => 'currency/index',
            ],
        ]
    ],
];
