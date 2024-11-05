<?php

use app\models\Kategori;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\KategoriSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kategoris';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="pc-content">
    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1 style="color:black; padding-bottom:20px;"> Kategori </h1>

    <p>
        <?= Html::a('Buat Kategori', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => ['class' => 'grid-view large-text'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_kategori',
            // 'nama_kategori',

            'nama_kategori' => [
                'attribute' => 'nama_kategori',
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari Nama Kategori',
                ],
            ],

            'slug' => [
                'attribute' => 'slug',
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari Slug',
                ],
            ],
            
            'status' => [
                'attribute' => 'status',
                'filter' => [
                    '0' => '0 - Tidak Tampil',
                    '1' => '1 - Tampil',
                ],
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'prompt' => 'Pilih Status',
                ],
            ],

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Kategori $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_kategori' => $model->id_kategori]);
                 }
            ],
        ],
    ]); ?>


</div>
