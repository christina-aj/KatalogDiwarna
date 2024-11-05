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
    public $file_foto;

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
            [['alt_k_awal', 'text_k_awal', 'desc_k_awal', 'url_k_awal', 'slug'], 'string', 'max' => 250],
            [['id_sub_kategori'], 'integer'],
            [['file_foto'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpg, png, jpeg, webp'],
            [['id_sub_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => subKategori::class, 'targetAttribute' => ['id_sub_kategori' => 'id_sub_kategori']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'katalog_awal_id' => 'Katalog Awal ID',
            'alt_k_awal' => 'Alt Foto',
            'text_k_awal' => 'Judul Foto',
            'desc_k_awal' => 'Deskripsi Foto',
            'url_k_awal' => 'Thumbnail Foto',
            'id_sub_kategori' => 'Id Sub Kategori',
            'slug' => 'Slug',
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
