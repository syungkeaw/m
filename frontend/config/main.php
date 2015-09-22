<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
        'user' => [
            // following line will restrict access to admin page
            'as frontend' => 'dektrium\user\filters\FrontendFilter',
        ],
    ],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityCookie' => [
                'name'     => '_frontendIdentity',
                'path'     => '/',
                'httpOnly' => true,
            ],
        ],
        'session' => [
            'name' => 'FRONTENDSESSID',
            'cookieParams' => [
                'httpOnly' => true,
                'path'     => '/',
            ],
        ],  

        // 'user' => [
        //     'identityClass' => 'common\models\User',
        //     'enableAutoLogin' => true,
        // ],
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
        'request'=>[
            'class' => 'common\components\Request',
            'web'=> '/frontend/web'
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            // Disable index.php
            'showScriptName' => false,
            // Disable r= routes
            'enablePrettyUrl' => true, 
            /**
             * /user/registration/register Displays registration form
             * /user/registration/resend Displays resend form
             * /user/registration/confirm Confirms a user (requires id and token query params)
             * /user/security/login Displays login form
             * /user/security/logout Logs the user out (available only via POST method)
             * /user/recovery/request Displays recovery request form
             * /user/recovery/reset Displays password reset form (requires id and token query params)
             * /user/settings/profile Displays profile settings form
             * /user/settings/account Displays account settings form (email, username, password)
             * /user/settings/networks Displays social network accounts settings page
             * /user/profile/show Displays user's profile (requires id query param)
             * /user/admin/index Displays user management interface
             */
            'rules' => [
                '/user/register' => '/user/registration/register',
                '/user/resend' => '/user/registration/resend',
                '/user/forgot' => '/user/recovery/request',
                '/user/login' => '/user/security/login',
                '/user/logout' => '/user/security/logout',

                '<controller:\w+>/<id:\d+>/<name:.+>' => '<controller>/index',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ],
        ],
    ],
    'params' => $params,
];
