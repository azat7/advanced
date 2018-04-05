<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log','geoData'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
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
        'geoData' => [
            'class'             => 'phpnt\geoData\GeoData',         // путь к классу
            'addToCookie'       => true,                            // сохранить в куки
            'addToSession'      => true,                            // сохранить в сессии
            'setTimezoneApp'    => true,                            // установить timezone в formatter (для вывода)
            'cookieDuration'    => 2592000                          // время хранения в куки
        ],
        /*
        'geolocation' => [
            'class' => 'rodzadra\geolocation\Geolocation',
            'config' => [
                'provider' => '[geoplugin]',
                'return_formats' => ['json','php','xml'],
                'api_key' => '',
            ],
        ],
        
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
