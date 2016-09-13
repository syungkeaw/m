<?php

use yii\db\Schema;
use yii\db\Migration;

class m160219_084437_create_story extends Migration
{
    public function up()
    {
        $this->createTable('{{%story}}', [
            'id' => $this->primaryKey(),
            'story_name' => $this->string(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci');
    }

    public function down()
    {
        $this->dropTable('{{%story}}');
    }
}
