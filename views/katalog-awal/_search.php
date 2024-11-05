<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\KatalogAwalSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="katalog-awal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'katalog_awal_id') ?>

    <?= $form->field($model, 'alt_k_awal') ?>

    <?= $form->field($model, 'text_k_awal') ?>

    <?= $form->field($model, 'desc_k_awal') ?>

    <?= $form->field($model, 'url_k_awal') ?>

    <?php // echo $form->field($model, 'id_sub_kategori') ?>

    <?php // echo $form->field($model, 'slug') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
