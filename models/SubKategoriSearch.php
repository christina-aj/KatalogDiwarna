<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SubKategori;
use yii\data\Pagination;
use Attribute;

/**
 * SubKategoriSearch represents the model behind the search form of `app\models\SubKategori`.
 */
class SubKategoriSearch extends SubKategori
{
    /**
     * {@inheritdoc}
     */
    public $nama_kategori;

    public function rules()
    {
        return [
            [['id_sub_kategori', 'id_kategori'], 'integer'],
            [['nama_sub_kategori', 'slug'], 'safe'],
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
        $query = SubKategori::find()->joinWith(['kategori']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10, // Jumlah item per halaman
            ],
            'sort' => [
                'attributes' => [
                    'nama_sub_kategori',
                    'slug',
                    'nama_kategori' => [
                        'asc' => ['kategori.nama_kategori' => SORT_ASC],
                        'desc' => ['kategori.nama_kategori' => SORT_DESC],
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
            'id_sub_kategori' => $this->id_sub_kategori,
            'id_kategori' => $this->id_kategori,
        ]);

        $query->andFilterWhere(['like', 'kategori.nama_kategori', $this->nama_kategori]);

        $query->andFilterWhere(['like', 'nama_sub_kategori', $this->nama_sub_kategori])
            ->andFilterWhere(['like', 'sub_kategori.slug', $this->slug]);

        return $dataProvider;
    }
}
