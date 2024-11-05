<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property int $id_kategori
 * @property string|null $nama_kategori
 * @property string|null $slug
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kategori', 'slug'], 'string', 'max' => 255],
            [['status'], 'integer'], // Pastikan status bertipe integer
            [['status'], 'required'], // Tambahkan aturan agar status wajib diisi
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kategori' => 'Id Kategori',
            'nama_kategori' => 'Nama Kategori',
            'slug' => 'Slug',
            'status' => 'Status',
        ];
    }

    public function getSubKategori()
    {
        return $this->hasOne(SubKategori::class, ['id_sub_kategori' => 'id_sub_kategori']);
    }
}
