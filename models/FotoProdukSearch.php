<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FotoProduk;

/**
 * FotoProdukSearch represents the model behind the search form of `app\models\FotoProduk`.
 */
class FotoProdukSearch extends FotoProduk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_foto_produk'], 'integer'],
            [['alt_foto_produk', 'text_foto_produk', 'desc_foto_produk', 'url_foto_produk'], 'safe'],
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
        $query = FotoProduk::find();

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
            'id_foto_produk' => $this->id_foto_produk,
        ]);

        $query->andFilterWhere(['like', 'alt_foto_produk', $this->alt_foto_produk])
            ->andFilterWhere(['like', 'text_foto_produk', $this->text_foto_produk])
            ->andFilterWhere(['like', 'desc_foto_produk', $this->desc_foto_produk])
            ->andFilterWhere(['like', 'url_foto_produk', $this->url_foto_produk]);

        return $dataProvider;
    }
}
