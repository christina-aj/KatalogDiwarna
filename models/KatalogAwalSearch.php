<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KatalogAwal;

/**
 * KatalogAwalSearch represents the model behind the search form of `app\models\KatalogAwal`.
 */
class KatalogAwalSearch extends KatalogAwal
{
    /**
     * {@inheritdoc}
     */

    public $nama_sub_kategori;
    public function rules()
    {
        return [
            [['katalog_awal_id', 'id_sub_kategori'], 'integer'],
            [['alt_k_awal', 'text_k_awal', 'desc_k_awal', 'url_k_awal', 'slug'], 'safe'],
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
        $query = KatalogAwal::find()->joinWith(['subKategori']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10, // Jumlah item per halaman
            ],
            'sort' => [
                'attributes' => [
                    'alt_k_awal',
                    'text_k_awal',
                    'desc_k_awal',
                    'url_k_awal',
                    'slug',
                    'nama_sub_kategori' => [
                        'asc' => ['subKategori.nama_sub_kategori' => SORT_ASC],
                        'desc' => ['subKategori.nama_sub_kategori' => SORT_DESC],
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
            'katalog_awal_id' => $this->katalog_awal_id,
            'id_sub_kategori' => $this->id_sub_kategori,
        ]);

        $query->andFilterWhere(['like', 'subKategori.nama_sub_kategori', $this->nama_sub_kategori]);
        
        $query->andFilterWhere(['like', 'alt_k_awal', $this->alt_k_awal])
            ->andFilterWhere(['like', 'text_k_awal', $this->text_k_awal])
            ->andFilterWhere(['like', 'desc_k_awal', $this->desc_k_awal])
            ->andFilterWhere(['like', 'url_k_awal', $this->url_k_awal])
            ->andFilterWhere(['like', 'katalog_awal.slug', $this->slug]);

        return $dataProvider;
    }
}
