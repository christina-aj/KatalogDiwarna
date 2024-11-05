<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\FotoProdukSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="foto-produk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_foto_produk') ?>

    <?= $form->field($model, 'alt_foto_produk') ?>

    <?= $form->field($model, 'text_foto_produk') ?>

    <?= $form->field($model, 'desc_foto_produk') ?>

    <?= $form->field($model, 'url_foto_produk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
