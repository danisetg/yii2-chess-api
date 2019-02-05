<?php
/**
 * Created by PhpStorm.
 * User: Daniset
 * Date: 2/4/2019
 * Time: 1:31 PM
 */

namespace app\controllers;


use yii\filters\auth\HttpBearerAuth;
use yii\web\Controller;

class UserController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBearerAuth::class,
        ];
        return $behaviors;
    }

    public function actionIndex()
    {
        return "asd";
    }

    public function actionRegister()
    {
    }
}