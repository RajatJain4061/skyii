<?php

namespace api\modules\v1\controllers;

use Yii;
use yii\rest\ActiveController;
use yii\web\NotFoundHttpException;
use yii\web\Response;

class UserController extends ActiveController
{
    public function behaviors()
    {
        return [
            [
                'class' => 'yii\filters\ContentNegotiator',
                'only' => ['v1/view', 'v1/index'],
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                ],
            ],
        ];
    }
    
    public function actionIndex()
    {
        return [
            'user_name' => 'Test',
            'user_email' => 'test@test.com',
        ];
    }
    
    public function actionShow()
    {
        return 'user test';
    }
}
