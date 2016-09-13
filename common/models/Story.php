<?php

namespace common\models;

use Yii;
use common\components\MActiveFullRecord;

/**
 * This is the model class for table "{{%story}}".
 *
 * @property integer $id
 * @property string $story_name
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class Story extends MActiveFullRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%story}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['story_name'], 'string', 'max' => 255],
            [['scene_order'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'story_name' => 'Story Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'scene_order' => 'Scene Order',
        ];
    }

    public function getGroups()
    {
        return $this->hasMany(Group::className(), ['story_id' => 'id']);
    } 

    public function getCharacters()
    {
        return $this->hasMany(Character::className(), ['story_id' => 'id']);
    } 

    public function getScenes()
    {
        return $this->hasMany(Scene::className(), ['story_id' => 'id']);
    } 
}
