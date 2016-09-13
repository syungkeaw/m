<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Character;

/**
 * CharacterSearch represents the model behind the search form about `common\models\Character`.
 */
class CharacterSearch extends Character
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'story_id', 'group_id', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['char_name'], 'safe'],
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
        $query = Character::find();

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
            'story_id' => $this->story_id,
            'group_id' => $this->group_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'char_name', $this->char_name]);

        return $dataProvider;
    }
}
