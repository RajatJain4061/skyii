<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'user' => [
            'identityClass' => 'modules\user\models\User',
            //'loginUrl' => ['user/user/login'],
        ]
    ],
    'modules' => [
        'gridview' => [
            'class' => '\kartik\grid\Module',
        ],
        'datecontrol' => [
            'class' => '\kartik\datecontrol\Module',
        ],
        'treemanager' =>  [
            'class' => '\kartik\tree\Module',
        ],
        'user' => [
            'class' => 'modules\user\Module',
            //'layout' => 'modules/user/views/layouts/main',
            'menus' => [
                'assignment' => [
                    'label' => 'Grant Access'
                ],
                'route' => null,
            ],
        ],
    ],
];
