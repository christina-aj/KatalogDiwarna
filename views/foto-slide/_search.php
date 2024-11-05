<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\FotoSlideSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="foto-slide-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_foto_slide') ?>

    <?= $form->field($model, 'judul_foto_slide') ?>

    <?= $form->field($model, 'desk_foto_slide') ?>

    <?= $form->field($model, 'alt_foto_slide') ?>

    <?= $form->field($model, 'url_foto_slide') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
