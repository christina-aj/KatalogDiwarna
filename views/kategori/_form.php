<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Kategori $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="create-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_kategori', [
    'labelOptions' => [
        'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
    ]
    ])
    ->textInput(['maxlength' => true, 'style' => 'font-size: 16px;']) ?>

    <?= $form->field($model, 'slug', [
    'labelOptions' => [
        'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
    ]
    ])
    ->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status', [
    'labelOptions' => [
        'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
    ]
    ])
    ->dropDownList(
        [0 => '0 - tidak tampil di home', 1 => '1 - tampil di home'], // Menentukan opsi dropdown
        ['prompt' => 'Pilih Status',  'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'] // Menambahkan placeholder
    ) ?>

    <div class="button-container" style="margin-top: 30px;">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Back', ['kategori/index'], ['class' => 'btn btn-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
