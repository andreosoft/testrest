<?php

namespace console\controllers;

use common\models\Currency;

class ConsoleController extends \yii\console\Controller {
    
    public $url = 'http://www.cbr.ru/scripts/XML_daily.asp';
    
    public function actionIndex() {
        Currency::deleteAll();
        $data = simplexml_load_file($this->url);
        foreach ($data->Valute as $el) {
            $m = new Currency();
            $m->name = (string)$el->Name;
            $m->rate = (double) str_replace(',', '.', $el->Value);
            $m->save();
        }
        print ('ok');
    }

}