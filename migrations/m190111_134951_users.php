<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m190111_134951_users
 */
class m190111_134951_users extends Migration {

    public function up() {
        $this->createTable('user', [
            'id' => Schema::TYPE_PK,
            'token' => Schema::TYPE_STRING . ' NOT NULL'
        ]);
    }

    public function down() {
        $this->dropTable('user');
    }

}
