<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\FotoSlide $model */

$this->title = $model->id_foto_slide;
$this->params['breadcrumbs'][] = ['label' => 'Foto Slides', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pc-content">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1 style="color:black; padding-bottom:20px;"> Detail Foto Slide Home </h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_foto_slide',
            'judul_foto_slide',
            'desk_foto_slide',
            'alt_foto_slide',
            'url_foto_slide:url',
        ],
    ]) ?>

    <div class="button-container">
        <?= Html::a('Update', ['update', 'id_foto_slide' => $model->id_foto_slide], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_foto_slide' => $model->id_foto_slide], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back', ['foto-slide/index'], ['class' => 'btn btn-secondary']) ?>
    </div>

</div>
