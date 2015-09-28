<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "genre".
 *
 * @property integer $id
 * @property integer $movie_id
 * @property string $genre
 */
class Genre extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'genre';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['movie_id', 'genre'], 'required'],
            [['movie_id'], 'integer'],
            [['genre'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'movie_id' => 'Movie ID',
            'genre' => 'Genre',
        ];
    }
}
