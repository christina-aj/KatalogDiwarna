<?php

namespace app\controllers;

class KategoriController extends \yii\web\Controller
{
    
    public function actionIndex()
    {
        return $this->render('index');

         $kategori = Kategori::find()->all();
 
         // Mengirim data ke view
         return $this->render('index', [
             'kategori' => $kategori,
         ]);
    }

}
