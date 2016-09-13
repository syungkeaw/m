<?php

namespace common\models;

use Yii;
use common\components\MActiveFullRecord;

/**
 * This is the model class for table "{{%group}}".
 *
 * @property integer $id
 * @property string $group_name
 * @property integer $story_id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class Group extends MActiveFullRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%group}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['story_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['group_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_name' => 'Group Name',
            'story_id' => 'Story ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
