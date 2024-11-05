<?php

use app\models\Testimonial;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TestimonialSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Testimonials';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pc-content">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1 style="color:black; padding-bottom:20px;"> Info Testimonial </h1>

    <p>
        <?= Html::a('Buat Testimonial', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => ['class' => 'grid-view large-text'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_testi',
            'nama_testi' => [
                'attribute' => 'nama_testi',
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari Nama Customer',
                ],
            ],

            'note_testi' => [
                'attribute' => 'note_testi',
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari Note Testi',
                ],
            ],

            'desc_testi' => [
                'attribute' => 'desc_testi',
                'format' => 'raw',
                'contentOptions' => [
                    'style' => 'width:600px; max-width:600px;'
                ],
                'filterInputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Cari Desc Testi',
                ],
            ],

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Testimonial $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_testi' => $model->id_testi]);
                 }
            ],
        ],
    ]); ?>


</div>
