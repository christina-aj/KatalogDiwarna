<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "foto_produk".
 *
 * @property int $id_foto_produk
 * @property string|null $alt_foto_produk
 * @property string|null $text_foto_produk
 * @property string|null $desc_foto_produk
 * @property string|null $url_foto_produk
 */
class FotoProduk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file_foto_produk;

    public static function tableName()
    {
        return 'foto_produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alt_foto_produk', 'text_foto_produk', 'desc_foto_produk', 'url_foto_produk'], 'string', 'max' => 250],
            [['file_foto_produk'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpg, png, jpeg, webp'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_foto_produk' => 'Id Foto Produk',
            'alt_foto_produk' => 'Alt Foto Produk',
            'text_foto_produk' => 'Text Foto Produk',
            'desc_foto_produk' => 'Desc Foto Produk',
            'url_foto_produk' => 'Url Foto Produk',
        ];
    }
}
