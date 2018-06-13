<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Contatos;

/**
 * SearchContatos represents the model behind the search form of `app\models\Contatos`.
 */
class SearchContatos extends Contatos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'telemovel', 'telefone', 'fax'], 'integer'],
            [['email', 'localizacao', 'descricao_pt', 'lang'], 'safe'],
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
        $query = Contatos::find();

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
            'telemovel' => $this->telemovel,
            'telefone' => $this->telefone,
            'fax' => $this->fax,
        ]);

        $query->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'localizacao', $this->localizacao])
            ->andFilterWhere(['like', 'descricao_pt', $this->descricao_pt])
            ->andFilterWhere(['like', 'lang', $this->lang]);

        return $dataProvider;
    }
}
