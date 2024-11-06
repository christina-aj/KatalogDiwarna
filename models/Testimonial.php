<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "testimonial".
 *
 * @property int $id_testi
 * @property string $nama_testi
 * @property string $note_testi
 * @property string $desc_testi
 */
class Testimonial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimonial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_testi', 'note_testi', 'desc_testi'], 'required'],
            [['desc_testi'], 'string'],
            [['nama_testi', 'note_testi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_testi' => 'Id Testi',
            'nama_testi' => 'Nama Customer',
            'note_testi' => 'Note Customer',
            'desc_testi' => 'Deskripsi Testi',
        ];
    }
}
