<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
<<<<<<< HEAD
            'cookieValidationKey' => '7O_AVC2OiJfXvGCLzMPN3cJhlEAosNEO',
=======
            'cookieValidationKey' => 'h9koIFiqG5-SKlYKosP13mP1uuMB_XNJ',
>>>>>>> c4d1a52eba6fee8b9caaaadbc30ca26074177c75
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
