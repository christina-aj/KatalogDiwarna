<?php

namespace app\controllers;

class KatalogAwalController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $katalog_awal = KatalogAwal::find()
            ->joinWith('subKategori.kategori')
            ->where(['kategori.status' => 1])
            ->all();
        
        return $this->render('index', [
            'katalog_awal' => $katalog_awal,
        ]);
        
    }

}
