<?php
return [
    'name' => 'LEBO游戏',
    'language' => 'zh-CN',
    'timeZone' => 'Asia/Shanghai',
    'version'  => '0.1',
    'charset'  => 'UTF-8',
    'vendorPath'  => '@app/vendor',

    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        "authManager" => [
            "class" => 'yii\rbac\DbManager',
        ],
    ],
];
