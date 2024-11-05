<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "foto_slide".
 *
 * @property int $id_foto_slide
 * @property string|null $judul_foto_slide
 * @property string|null $desk_foto_slide
 * @property string|null $alt_foto_slide
 * @property string|null $url_foto_slide
 */
class FotoSlide extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $file_foto_slide;
    public static function tableName()
    {
        return 'foto_slide';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul_foto_slide', 'desk_foto_slide', 'alt_foto_slide', 'url_foto_slide'], 'string', 'max' => 255],
            [['file_foto_slide'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpg, png, jpeg, webp'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_foto_slide' => 'Id Foto Slide',
            'judul_foto_slide' => 'Judul Foto Slide',
            'desk_foto_slide' => 'Desk Foto Slide',
            'alt_foto_slide' => 'Alt Foto Slide',
            'url_foto_slide' => 'Url Foto Slide',
        ];
    }
}
