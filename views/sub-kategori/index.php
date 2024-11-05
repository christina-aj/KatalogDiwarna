<?php

use app\models\SubKategori;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\LinkPager;

/** @var yii\web\View $this */
/** @var app\models\SubKategoriSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Sub Kategoris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pc-content">

    <h1 style="color:black; padding-bottom:20px;"> Sub Kategori </h1>

    <p>
        <?= Html::a('Buat Sub Kategori', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => ['class' => 'grid-view large-text', 'style' => 'overflow-x: auto;'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_sub_kategori',

            'nama_sub_kategori' => [
                'attribute' => 'nama_sub_kategori',
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari Nama Sub Kategori',
                ],
            ],
            // 'nama_sub_kategori',
            // 'id_kategori',
            'slug' => [
                'attribute' => 'slug',
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari slug',
                ],
            ],

            'kategori.nama_kategori' => [
                'attribute' => 'nama_kategori', // Atribut dari tabel supplier
                'value' => 'kategori.nama_kategori', // Mengakses nama supplier melalui relasi
                'label' => 'Nama Kategori',
                'filterInputOptions' => [            // Menambahkan placeholder pada input filter
                    'class' => 'form-control',       // Tambahkan class jika perlu
                    'placeholder' => 'Cari Nama Kategori', // Placeholder yang ingin ditampilkan
                ],
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SubKategori $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_sub_kategori' => $model->id_sub_kategori]);
                 }
            ],
        ],
    ]); ?>


</div>
