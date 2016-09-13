<?php

use yii\db\Schema;
use yii\db\Migration;

class m160219_084450_create_character extends Migration
{
    public function up()
    {
        $this->createTable('{{%character}}', [
            'id' => $this->primaryKey(),
            'char_name' => $this->string(),
            'story_id' => $this->integer(),
            'group_id' => $this->integer(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci');
    }

    public function down()
    {
        $this->dropTable('{{%character}}');
    }
}
