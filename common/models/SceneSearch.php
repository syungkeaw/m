<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Scene;

/**
 * SceneSearch represents the model behind the search form about `common\models\Scene`.
 */
class SceneSearch extends Scene
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'start', 'story_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['scene_name', 'duration', 'chars'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Scene::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'start' => $this->start,
            'story_id' => $this->story_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'scene_name', $this->scene_name])
            ->andFilterWhere(['like', 'duration', $this->duration])
            ->andFilterWhere(['like', 'chars', $this->chars]);

        return $dataProvider;
    }
}
