<?php

namespace modules\user\controllers;

use Yii;

/**
 * Class DefaultController
 * @package modules\user\controllers
 */
class DefaultController extends \yii\web\Controller
{

    /**
     * Action index
     */
    public function actionIndex($page = 'README.md')
    {
        if (strpos($page, '.png') !== false) {
            $file = Yii::getAlias("@modules/user/{$page}");
            return Yii::$app->getResponse()->sendFile($file);
        }

        return $this->render('index', ['page' => $page]);
    }
}
