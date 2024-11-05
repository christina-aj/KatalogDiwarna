<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\DetailProduk $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="create-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'katalog_awal_id',  [
    'labelOptions' => [
        'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
    ]
    ])
    ->textInput() ?>

    <?= $form->field($model, 'deskripsi_detail_p',  [
    'labelOptions' => [
        'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
    ]
    ])
    ->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'bahan_detail_p',  [
    'labelOptions' => [
        'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
    ]
    ])
    ->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'minim_detail_p',  [
    'labelOptions' => [
        'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
    ]
    ])
    ->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'custom_detail_p',  [
    'labelOptions' => [
        'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
    ]
    ])
    ->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penutup_detail_p',  [
    'labelOptions' => [
        'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
    ]
    ])
    ->textarea(['rows' => 6]) ?>

    <div class="button-container" style="margin-top: 30px;">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Back', ['detail-produk/index'], ['class' => 'btn btn-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
