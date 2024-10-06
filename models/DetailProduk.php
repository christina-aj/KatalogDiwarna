<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detail_produk".
 *
 * @property int $id_detail_p
 * @property int $katalog_awal_id
 * @property string|null $deskripsi_detail_p
 * @property string|null $list_desk_detail_p
 * @property string|null $penutup_detail_p
 * @property string $linkwa_detail_p
 *
 * @property KatalogAwal $katalogAwal
 */
class DetailProduk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['katalog_awal_id'], 'required'],
            [['katalog_awal_id'], 'integer'],
            [['deskripsi_detail_p', 'list_desk_detail_p', 'penutup_detail_p', 'linkwa_detail_p'], 'string', 'max' => 250],
            [['katalog_awal_id'], 'exist', 'skipOnError' => true, 'targetClass' => KatalogAwal::class, 'targetAttribute' => ['katalog_awal_id' => 'katalog_awal_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_detail_p' => 'Id Detail P',
            'katalog_awal_id' => 'Katalog Awal ID',
            'deskripsi_detail_p' => 'Deskripsi Detail P',
            'list_desk_detail_p' => 'List Desk Detail P',
            'penutup_detail_p' => 'Penutup Detail P',
            'linkwa_detail_p' => 'Linkwa Detail P',
        ];
    }

    /**
     * Gets query for [[KatalogAwal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKatalogAwal()
    {
        return $this->hasOne(KatalogAwal::class, ['katalog_awal_id' => 'katalog_awal_id']);
    }
}
