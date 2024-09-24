<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sub_kategori".
 *
 * @property int $id_sub_kategori
 * @property string $nama_sub_kategori
 * @property int $id_kategori
 * @property string $slug
 *
 * @property KatalogAwal[] $katalogAwals
 * @property Kategori $kategori
 */
class SubKategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sub_kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_sub_kategori', 'id_kategori', 'slug'], 'required'],
            [['id_kategori'], 'integer'],
            [['nama_sub_kategori', 'slug'], 'string', 'max' => 255],
            [['id_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::class, 'targetAttribute' => ['id_kategori' => 'id_kategori']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_sub_kategori' => 'Id Sub Kategori',
            'nama_sub_kategori' => 'Nama Sub Kategori',
            'id_kategori' => 'Id Kategori',
            'slug' => 'Slug',
        ];
    }

    /**
     * Gets query for [[KatalogAwals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKatalogAwals()
    {
        return $this->hasMany(KatalogAwal::class, ['id_sub_kategori' => 'id_sub_kategori']);
    }

    /**
     * Gets query for [[Kategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(Kategori::class, ['id_kategori' => 'id_kategori']);
    }
}
