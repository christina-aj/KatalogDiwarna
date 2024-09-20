<?php

namespace app\controllers;

use app\models\KatalogAwal;

class KatalogAwalController extends \yii\web\Controller
{
    public function actionIndex()
    {
        // Mengambil semua data dari tabel katalog_awal
        $katalog_awals = KatalogAwal::find()->all();

        // Mengirim data ke view
        return $this->render('index', [
            'katalog_awal' => $katalog_awals,
        ]);
    }
}
