<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=loyolastudentcenter',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
           'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,  // comment out to try swiftmailer
            'transport' => [
            'class' => 'Swift_Smtptransport',
            'host' =>'mailtrap.io',
            'username' => '9b825074595ea0',
            'password'=> '4beb981207e9b9',
            'port' => '2525',
            'encryption' => 'tls',
            ],
        ],
    ],
];
