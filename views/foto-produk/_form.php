<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\FotoProduk $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="create-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'alt_foto_produk', [
        'labelOptions' => [
            'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
        ]
    ])
    ->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_foto_produk', [
        'labelOptions' => [
            'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
        ]
    ])
    ->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc_foto_produk', [
        'labelOptions' => [
            'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
        ]
    ])
    ->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_foto_produk', [
        'labelOptions' => [
            'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
        ]
    ])
    ->fileInput()->label('Pilih Foto Produk') ?>

    <div class="button-container" style="margin-top: 30px;">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Back', ['foto-produk/index'], ['class' => 'btn btn-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
