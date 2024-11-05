<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Testimonial;

/**
 * TestimonialSearch represents the model behind the search form of `app\models\Testimonial`.
 */
class TestimonialSearch extends Testimonial
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_testi'], 'integer'],
            [['nama_testi', 'note_testi', 'desc_testi'], 'safe'],
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
        $query = Testimonial::find();

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
            'id_testi' => $this->id_testi,
        ]);

        $query->andFilterWhere(['like', 'nama_testi', $this->nama_testi])
            ->andFilterWhere(['like', 'note_testi', $this->note_testi])
            ->andFilterWhere(['like', 'desc_testi', $this->desc_testi]);

        return $dataProvider;
    }
}
