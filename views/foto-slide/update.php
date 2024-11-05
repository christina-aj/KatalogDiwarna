<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\FotoSlide $model */

$this->title = 'Update Foto Slide: ' . $model->id_foto_slide;
$this->params['breadcrumbs'][] = ['label' => 'Foto Slides', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_foto_slide, 'url' => ['view', 'id_foto_slide' => $model->id_foto_slide]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="create-form">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1 style="color:black; padding-bottom:20px;"> Update Foto Slide Home </h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
