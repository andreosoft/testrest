<?php

namespace rest\controllers;

use yii\data\ActiveDataProvider;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\ContentNegotiator;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\filters\RateLimiter;

class CurrencyController extends \yii\rest\ActiveController {

    public $modelClass = '\common\models\Currency';

    public function behaviors() {
        return [
            'contentNegotiator' => [
                'class' => ContentNegotiator::className(),
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                    'application/xml' => Response::FORMAT_XML,
                ],
            ],
            'verbFilter' => [
                'class' => VerbFilter::className(),
                'actions' => $this->verbs(),
            ],
            'authenticator' => [
                 'class' => HttpBearerAuth::className()
            ],
            'rateLimiter' => [
                'class' => RateLimiter::className(),
            ],
        ];
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
