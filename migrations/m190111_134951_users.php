<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m190111_134951_users
 */
class m190111_134951_users extends Migration {

    public function up() {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'token' => $this->string(50)
        ]);
        $this->insert('user', [
            'token' => '123456789'
        ]);
    }

    public function down() {
        $this->dropTable('user');
    }

}
