<?php

use app\models\FotoProduk;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\FotoProdukSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Foto Produks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pc-content">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1 style="color:black; padding-bottom:20px;"> Foto Produk (Halaman About) </h1>

    <p>
        <?= Html::a('Tambah Foto Produk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => ['class' => 'grid-view large-text', 'style' => 'overflow-x: auto;'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_foto_produk',
            'alt_foto_produk' => [
                'attribute' => 'alt_foto_produk',
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari alt Foto Produk',
                ],
            ],

            'text_foto_produk' => [
                'attribute' => 'text_foto_produk',
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Judul Foto',
                ],
            ],

            'desc_foto_produk' => [
                'attribute' => 'desc_foto_produk',
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari Desc Foto',
                ],
            ],

            [
                'attribute' => 'url_foto_produk',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img(
                        Yii::getAlias('@web').$model->url_foto_produk,
                        ['width' => '100px', 'style' => 'display: block; margin-left: auto; margin-right: auto;']
                    );
                },
            ],

            // 'url_foto_produk:url',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, FotoProduk $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_foto_produk' => $model->id_foto_produk]);
                 }
            ],
        ],
    ]); ?>


</div>
