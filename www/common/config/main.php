<?php
return [
    'charset' => 'UTF-8',
    'language'=> 'th-TH',
    'sourceLanguage'=> 'th-TH',
    'timeZone' => 'Asia/Bangkok',
    'version' => '0.0.1(Dev)',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        // TODO(SaTangTheValue): Enable Pretty URL
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                'module/<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
            ),
        ],
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
    ],
];
