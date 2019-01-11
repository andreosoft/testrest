<?php

namespace rest\controllers;

use yii\data\ActiveDataProvider;
use yii\filters\auth\HttpBearerAuth;

class CurrencyController extends \yii\rest\ActiveController {

    public $modelClass = '\common\models\Currency';

    public function behaviors() {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBearerAuth::className(),
        ];
        return $behaviors;
    }

    public function actions() {
        return [
            'view' => [
                'class' => 'yii\rest\ViewAction',
                'modelClass' => $this->modelClass,
                'checkAccess' => [$this, 'checkAccess'],
            ],
        ];
    }

    public function actionIndex() {
        return new ActiveDataProvider([
            'pagination' => [
                'pageSize' => 10,
            ],
            'query' => $this->modelClass::find(),
        ]);
    }

}
