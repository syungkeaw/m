<?php

use yii\db\Schema;
use yii\db\Migration;

class m160219_104834_add_scene_order extends Migration
{
    public function up()
    {
        $this->addColumn('{{%story}}', 'scene_order', $this->string());
    }

    public function down()
    {
        $this->dropColumn('{{%story}}', 'scene_order');
    }
}
