<?php

namespace common\models;

class Currency extends \yii\db\ActiveRecord {
    
    public static function tableName() {
        return 'currency';
    }

    public function rules() {
        return [
            ['id', 'integer'],
            ['name', 'string'],
            ['rate', 'number']          
        ];
    }
}