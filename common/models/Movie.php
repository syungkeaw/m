<?php

namespace common\models;

use Yii;
use common\components\MActiveRecord;

/**
 * This is the model class for table "movie".
 *
 * @property integer $id
 * @property integer $tmdb_id
 * @property string $imdb_id
 * @property string $title
 * @property string $title_2
 * @property string $overview
 * @property string $overview_2
 * @property string $homepage
 * @property string $poster
 * @property integer $release
 * @property string $rate
 * @property string $runtime
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Movie extends MActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'movie';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tmdb_id', 'imdb_id', 'title',], 'required'],
            [['tmdb_id', 'release', 'status', 'created_at', 'updated_at'], 'integer'],
            [['overview', 'overview_2'], 'string'],
            [['imdb_id', 'title', 'title_2', 'homepage', 'poster', 'rate', 'runtime'], 'string', 'max' => 255],
            [['tmdb_id'], 'unique'],
            [['imdb_id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tmdb_id' => 'Tmdb ID',
            'imdb_id' => 'Imdb ID',
            'title' => 'Title',
            'title_2' => 'Title 2',
            'overview' => 'Overview',
            'overview_2' => 'Overview 2',
            'homepage' => 'Homepage',
            'poster' => 'Poster',
            'release' => 'Release',
            'rate' => 'Rate',
            'runtime' => 'Runtime',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
