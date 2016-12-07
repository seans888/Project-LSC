<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],

    'components' => [
        'user' => [
            'identityClass' => 'common\models\Admin',
            'enableAutoLogin' => true,
            'identityCookie' => [
                'name' => '_backendUser',
            ]
        ],

        'session' => [
            'name' => 'PHPBACKSESSID',
            'savePath' => sys_get_temp_dir(),
        ],

        'request' => [
            'cookieValidationKey' => 'jzqfUhttHVASSrIwPeXl',
            'csrfParam' => '_backendCSRF',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
          'view' => [
            'theme' => [
             'pathMap' => [
                '@app/views' => '@backend/views/adminlte/yii2-app' //adminLTE Path
             ],
         ],
    ],
        'urlManager' =>[
            'enablePrettyUrl' => false,
            'class' => 'yii\web\UrlManager',
            'showScriptName' => false,
            ],
             'urlManagerFrontend'=>[
                'enablePrettyUrl' => true,
                'class' => 'yii\web\UrlManager',
                'showScriptName'=>false,
                'baseUrl' => '/loyolastudentcenter2/frontend/web',
                ],
        ],
    'params' => $params,
];
