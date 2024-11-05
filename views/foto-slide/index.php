<?php

use app\models\FotoSlide;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\FotoSlideSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Foto Slides';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pc-content">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1 style="color:black; padding-bottom:20px;"> Foto Slide (Slider Home) </h1>

    <p>
        <?= Html::a('Tambah Foto Slide', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => ['class' => 'grid-view large-text', 'style' => 'overflow-x: auto;'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_foto_slide',
            'judul_foto_slide' => [
                'attribute' => 'judul_foto_slide',
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari Judul Foto Slide',
                ],
            ],

            'desk_foto_slide' => [
                'attribute' => 'desk_foto_slide',
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari Deskripsi Foto Slide',
                ],
            ],

            'alt_foto_slide' => [
                'attribute' => 'alt_foto_slide',
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari Alt Foto Slide',
                ],
            ],

            [
                'attribute' => 'url_foto_slide',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img(
                        Yii::getAlias('@web').$model->url_foto_slide,
                        ['width' => '100px', 'style' => 'display: block; margin-left: auto; margin-right: auto;']
                    );
                },
            ],
            
            // 'url_foto_slide:url',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, FotoSlide $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_foto_slide' => $model->id_foto_slide]);
                 }
            ],
        ],
    ]); ?>


</div>
