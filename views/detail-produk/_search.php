<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\DetailProdukSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="detail-produk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_detail_p') ?>

    <?= $form->field($model, 'katalog_awal_id') ?>

    <?= $form->field($model, 'deskripsi_detail_p') ?>

    <?= $form->field($model, 'bahan_detail_p') ?>

    <?= $form->field($model, 'minim_detail_p') ?>

    <?php // echo $form->field($model, 'custom_detail_p') ?>

    <?php // echo $form->field($model, 'penutup_detail_p') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
