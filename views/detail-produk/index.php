<?php

use app\models\DetailProduk;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\DetailProdukSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Detail Produks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pc-content">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1 style="color:black; padding-bottom:20px;"> Detail Produk </h1>

    <p>
        <?= Html::a('Buat Detail Produk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => ['class' => 'grid-view large-text'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_detail_p',
            // 'katalog_awal_id',
            // 'deskripsi_detail_p:ntext',
            'katalogAwal.text_k_awal' => [
                'attribute' => 'text_k_awal', // Atribut dari tabel supplier
                'value' => 'katalogAwal.text_k_awal', // Mengakses nama supplier melalui relasi
                'label' => 'Nama Kategori',
                'filterInputOptions' => [            // Menambahkan placeholder pada input filter
                    'class' => 'form-control',       // Tambahkan class jika perlu
                    'placeholder' => 'Cari Nama Kategori', // Placeholder yang ingin ditampilkan
                ],
            ],

            [
                'attribute' => 'deskripsi_detail_p',
                'format' => 'raw',
                'contentOptions' => [
                    'style' => 'width:400px; max-width:400px;'
                ],
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari deskripsi...'
                ],
            ],

            'bahan_detail_p' => [
                'attribute' => 'bahan_detail_p',
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari Detail Bahan',
                ],
            ],

            'minim_detail_p' => [
                'attribute' => 'minim_detail_p',
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari Detail Minim Order',
                ],
            ],
            'custom_detail_p'=> [
                'attribute' => 'custom_detail_p',
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari Custom/Ready',
                ],
            ],
            //'penutup_detail_p:ntext',
            [
                'attribute' => 'penutup_detail_p',
                'format' => 'raw',
                'contentOptions' => [
                    'style' => 'width:400px; max-width:400px;'
                ],
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari deskripsi penutup...'
                ],
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DetailProduk $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_detail_p' => $model->id_detail_p]);
                 }
            ],
        ],
    ]); ?>


</div>
