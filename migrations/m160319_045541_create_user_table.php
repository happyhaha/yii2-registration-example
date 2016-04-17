<?php

use yii\db\Migration;

class m160319_045541_create_user_table extends Migration
{
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'email'=>$this->string(100),
            'password'=>$this->string(255)
        ]);
    }

    public function down()
    {
        $this->dropTable('user');
    }
}
