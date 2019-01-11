<?php

use yii\db\Migration;
use yii\db\Schema;

class m190111_130342_currency extends Migration {

    public function up() {
        $this->createTable('currency', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'rate' => Schema::TYPE_DECIMAL,
        ]);
    }

    public function down() {
        $this->dropTable('currency');
    }
}
