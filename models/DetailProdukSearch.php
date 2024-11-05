<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetailProduk;

/**
 * DetailProdukSearch represents the model behind the search form of `app\models\DetailProduk`.
 */
class DetailProdukSearch extends DetailProduk
{
    /**
     * {@inheritdoc}
     */
    public $text_k_awal;
    public function rules()
    {
        return [
            [['id_detail_p', 'katalog_awal_id'], 'integer'],
            [['deskripsi_detail_p', 'bahan_detail_p', 'minim_detail_p', 'custom_detail_p', 'penutup_detail_p'], 'safe'],
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
        $query = DetailProduk::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10, // Jumlah item per halaman
            ],
            'sort' => [
                'attributes' => [
                    'deskripsi_detail_p',
                    'bahan_detail_p',
                    'minim_detail_p',
                    'custom_detail_p',
                    'penutup_detail_p',
                    'text_k_awal' => [
                        'asc' => ['katalogAwal.text_k_awal' => SORT_ASC],
                        'desc' => ['katalogAwal.text_k_awal' => SORT_DESC],
                    ],
                ],
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_detail_p' => $this->id_detail_p,
            'katalog_awal_id' => $this->katalog_awal_id,
        ]);

        $query->andFilterWhere(['like', 'katalogAwal.text_k_awal', $this->text_k_awal]);
        $query->andFilterWhere(['like', 'deskripsi_detail_p', $this->deskripsi_detail_p])
            ->andFilterWhere(['like', 'bahan_detail_p', $this->bahan_detail_p])
            ->andFilterWhere(['like', 'minim_detail_p', $this->minim_detail_p])
            ->andFilterWhere(['like', 'custom_detail_p', $this->custom_detail_p])
            ->andFilterWhere(['like', 'penutup_detail_p', $this->penutup_detail_p]);

        return $dataProvider;
    }
}
