<?php

use yii\db\Schema;
use yii\db\Migration;

class m160219_074411_create_scene extends Migration
{
    public function up()
    {
        $this->createTable('{{%scene}}', [
            'id' => $this->primaryKey(),
            'scene_name' => $this->string(),
            'start' => $this->integer(),
            'duration' => $this->string(),
            'chars' => $this->string()->notNull(),
            'story_id' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci');
    }

    public function down()
    {
        $this->dropTable('{{%scene}}');
    }
}
