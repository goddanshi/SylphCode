<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [

    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'defaultRoute' => 'site/index',
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [   
        'httpClient' => [
        'class' => \yii\httpclient\Client::class,
    ],
         'db' => require __DIR__ . '/db.php',
         'session' => [
    'class' => 'yii\web\Session', // по умолчанию — сессии в файлах
],
'urlManager' => [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'enableStrictParsing' => false,
    'rules' => [
        'contacts' => 'site/contacts',
        'webdev' => 'site/webdev',
        'podderzhka-saytov' => 'site/podderzhka-saytov',
        'frontend-dev' => 'site/frontend-dev',
        'backend-dev' => 'site/backend-dev',
        'price-list' => 'site/price-list',
        'faq' => 'site/faq',
        'case' => 'site/case',
        'blog' => 'site/blog',
        'redirect-dashboard' => 'site/redirect-dashboard',
        '' => 'site/index', // Главная
    ],
],



        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'Wh3XXPkED51OJXfEu83bs0OiCc-maNhZ',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
      
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['*'],
    ];
}

return $config;
