<?php

namespace common\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface {

    public static function tableName() {
        return 'user';
    }

    public function rules() {
        return [
            ['id', 'integer'],
            ['token', 'string']      
        ];
    }
    
    public static function findIdentity($id) {
        return static::findOne(['id' => $id]);
    }
    
    public static function findIdentityByAccessToken($token, $type = null) {
        return static::findOne(['token' => $token]);
    }

    public function getId() {
        return $this->getPrimaryKey();
    }

    public function getAuthKey() {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey) {
        return $this->getAuthKey() === $authKey;
    }

}