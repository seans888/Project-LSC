<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation

            'cookieValidationKey' => 'et-0sT9cUHf0Z7IeJ3yiYvCFmkrcNTES',

            'cookieValidationKey' => '6cuS7nkrU697LeprTYwWMZhCiQf_TG_G',

        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
