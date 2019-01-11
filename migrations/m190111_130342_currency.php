<?php

use yii\db\Migration;
use yii\db\Schema;

class m190111_130342_currency extends Migration {

    public function up() {
        $this->createTable('currency', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'rate' => $this->decimal(10,5),
        ]);
    }

    public function down() {
        $this->dropTable('currency');
    }
}
