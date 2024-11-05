<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\FotoSlide $model */

$this->title = 'Create Foto Slide';
$this->params['breadcrumbs'][] = ['label' => 'Foto Slides', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="create-form">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1 style="color:black; padding-bottom:20px;"> Tambah Foto Slide Home</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
