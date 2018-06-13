<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Post;

/**
 * SearchPost represents the model behind the search form of `app\models\Post`.
 */
class SearchPost extends Post
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_user'], 'integer'],
            [['title_pt', 'title_en', 'descricao_pt', 'descricao_en', 'midea_pt', 'midea_en', 'anexo_pt', 'anexo_en', 'created_at', 'update_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Post::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'created_at' => $this->created_at,
            'update_at' => $this->update_at,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'title_pt', $this->title_pt])
            ->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'descricao_pt', $this->descricao_pt])
            ->andFilterWhere(['like', 'descricao_en', $this->descricao_en])
            ->andFilterWhere(['like', 'midea_pt', $this->midea_pt])
            ->andFilterWhere(['like', 'midea_en', $this->midea_en])
            ->andFilterWhere(['like', 'anexo_pt', $this->anexo_pt])
            ->andFilterWhere(['like', 'anexo_en', $this->anexo_en]);

        return $dataProvider;
    }
}
