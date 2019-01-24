<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/params.php'
);

$config = [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'defaultRoute'=>'blog/index/index',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'assetManager' => [
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'js' => [],  // 去除 jquery.js
                    'sourcePath' => null,  // 防止在 frontend/web/asset 下生产文件
                ],
                'yii\web\YiiAsset' => [
                    'js' => [],  // 去除 yii.js
                    'sourcePath' => null,  // 防止在 frontend/web/asset 下生产文件
                ],

                'yii\widgets\ActiveFormAsset' => [
                    'js' => [],  // 去除 yii.activeForm.js
                    'sourcePath' => null,  // 防止在 frontend/web/asset 下生产文件
                ],

                'yii\validators\ValidationAsset' => [
                    'js' => [],  // 去除 yii.validation.js
                    'sourcePath' => null,  // 防止在 frontend/web/asset 下生产文件
                ],
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => [],  // 去除 bootstrap.css
                    'sourcePath' => null, // 防止在 frontend/web/asset 下生产文件
                ],
                'yii\bootstrap\BootstrapPluginAsset' => [
                    'js' => [],  // 去除 bootstrap.js
                    'sourcePath' => null,  // 防止在 frontend/web/asset 下生产文件
                ],
            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'cookieValidationKey' => 'mhn9YQaYmwzIeG8jjeJANraNWHIBQOjO',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<module:\w+>/<controller:\w+>/<id:\d+>' => '<module>/<controller>/view',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ],
        ],

    ],
    'params' => $params,
    'modules' => require __DIR__.'./modules.php',
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
