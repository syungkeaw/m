<?php

namespace common\models;

use Yii;
use common\components\MActiveFullRecord;

/**
 * This is the model class for table "{{%scene}}".
 *
 * @property integer $id
 * @property string $scene_name
 * @property integer $start
 * @property string $duration
 * @property string $chars
 * @property integer $story_id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class Scene extends MActiveFullRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%scene}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['chars', 'story_id'], 'required'],
            [['start', 'story_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['scene_name', 'duration'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'scene_name' => 'Scene Name',
            'start' => 'Start',
            'duration' => 'Duration',
            'chars' => 'Chars',
            'story_id' => 'Story ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }   

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->chars = json_encode($this->chars);
            
            return true;
        }else{
            return false;
        }
    }
}
