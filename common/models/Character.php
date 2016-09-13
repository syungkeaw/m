<?php

namespace common\models;

use Yii;
use common\components\MActiveFullRecord;

/**
 * This is the model class for table "{{%character}}".
 *
 * @property integer $id
 * @property string $char_name
 * @property integer $story_id
 * @property integer $guoup_id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class Character extends MActiveFullRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%character}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['story_id', 'group_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['char_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'char_name' => 'Char Name',
            'story_id' => 'Story ID',
            'group_id' => 'Group ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    public function getGroup()
    {
        return $this->hasOne(Group::className(), ['id' => 'group_id']);
    } 
}
