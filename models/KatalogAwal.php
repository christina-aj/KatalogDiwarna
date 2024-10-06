<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "katalog_awal".
 *
 * @property int $katalog_awal_id
 * @property string|null $alt_k_awal
 * @property string|null $text_k_awal
 * @property string|null $desc_k_awal
 * @property string|null $url_k_awal
 */
class KatalogAwal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'katalog_awal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alt_k_awal', 'text_k_awal', 'desc_k_awal', 'url_k_awal'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'katalog_awal_id' => 'Katalog Awal ID',
            'alt_k_awal' => 'Alt K Awal',
            'text_k_awal' => 'Text K Awal',
            'desc_k_awal' => 'Desc K Awal',
            'url_k_awal' => 'Url K Awal',
        ];
    }

    public function getSubKategori()
    {
        return $this->hasOne(SubKategori::class, ['id_sub_kategori' => 'id_sub_kategori']);
    }

    public function getDetailProduk()
    {
        return $this->hasOne(DetailProduk::class, ['katalog_awal_id' => 'katalog_awal_id']);
    }
}
