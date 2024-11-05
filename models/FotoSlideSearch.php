<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FotoSlide;

/**
 * FotoSlideSearch represents the model behind the search form of `app\models\FotoSlide`.
 */
class FotoSlideSearch extends FotoSlide
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_foto_slide'], 'integer'],
            [['judul_foto_slide', 'desk_foto_slide', 'alt_foto_slide', 'url_foto_slide'], 'safe'],
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
        $query = FotoSlide::find();

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
            'id_foto_slide' => $this->id_foto_slide,
        ]);

        $query->andFilterWhere(['like', 'judul_foto_slide', $this->judul_foto_slide])
            ->andFilterWhere(['like', 'desk_foto_slide', $this->desk_foto_slide])
            ->andFilterWhere(['like', 'alt_foto_slide', $this->alt_foto_slide])
            ->andFilterWhere(['like', 'url_foto_slide', $this->url_foto_slide]);

        return $dataProvider;
    }
}
