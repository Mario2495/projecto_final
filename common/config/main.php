<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        //RBAC
        'authManager' => [
              'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\PhpManager'
        ],
    ],
];
