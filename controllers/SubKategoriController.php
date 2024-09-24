<?php

namespace app\controllers;

class SubKategoriController extends \yii\web\Controller
{
    
    public function actionIndex()
    {
        return $this->render('index');

        $sub_kategori = SubKategori::find()->all();

        // Mengirim data ke view
        return $this->render('index', [
            'sub_kategori' => $sub_kategori,
        ]);
    }

}
