<?php

namespace common\models;

use Yii;
use common\components\MActiveRecord;

/**
 * This is the model class for table "people".
 *
 * @property integer $id
 * @property string $full_name
 * @property string $image_path
 * @property integer $type
 * @property integer $created_at
 * @property integer $updated_at
 */
class People extends MActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'people';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'created_at', 'updated_at'], 'integer'],
            [['full_name', 'image_path'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'image_path' => 'Image Path',
            'type' => 'Type',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
