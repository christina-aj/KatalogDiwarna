<?php

use app\models\KatalogAwal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\KatalogAwalSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Katalog Awals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pc-content">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1 style="color:black; padding-bottom:20px;"> Foto Katalog Home </h1>

    <p>
        <?= Html::a('Tambah Foto Katalog', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => ['class' => 'grid-view large-text', 'style' => 'overflow-x: auto;'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'katalog_awal_id',
            'alt_k_awal' => [
                'attribute' => 'alt_k_awal',
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari alt Foto',
                ],
            ],

            'text_k_awal' => [
                'attribute' => 'text_k_awal',
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari Judul Foto',
                ],
            ],

            'desc_k_awal' => [
                'attribute' => 'desc_k_awal',
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari Deskripsi Foto',
                ],
            ],

            'slug' => [
                'attribute' => 'slug',
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari slug',
                ],
            ],

            'subKategori.nama_sub_kategori' => [
                'attribute' => 'nama_sub_kategori', 
                'value' => 'subKategori.nama_sub_kategori', 
                'label' => 'Sub Kategori',
                'filterInputOptions' => [           
                    'class' => 'form-control', 
                    'placeholder' => 'Cari Sub-Kategori',
                ],
            ],

            // 'url_k_awal:url' => [
            //     'attribute' => 'url_k_awal',
            //     'filterInputOptions' => [
            //         'class' => 'form-control',
            //         'placeholder' => 'Cari URL Foto',
            //     ],
            // ],
            [
                'attribute' => 'url_k_awal',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img(
                        Yii::getAlias('@web').$model->url_k_awal,
                        ['width' => '100px', 'style' => 'display: block; margin-left: auto; margin-right: auto;']
                    );
                },
            ],
            
            //'id_sub_kategori',
            //'slug',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, KatalogAwal $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'katalog_awal_id' => $model->katalog_awal_id]);
                 }
            ],
        ],
    ]); ?>


</div>
