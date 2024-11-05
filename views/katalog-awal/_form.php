<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\KatalogAwal $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="create-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'alt_k_awal', [
        'labelOptions' => [
            'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
        ]
    ])
    ->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_k_awal', [
        'labelOptions' => [
            'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
        ]
    ])
    ->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc_k_awal', [
        'labelOptions' => [
            'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
        ]
    ])
    ->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'url_k_awal', [
        'labelOptions' => [
            'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
        ]
    ])
    ->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'slug', [
        'labelOptions' => [
            'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
        ]
    ])
    ->textInput(['maxlength' => true]) ?>
    
    <?php
    $dataPost = ArrayHelper::map(\app\models\subKategori::find()->asArray()->all(), 'id_sub_kategori', function ($model) {
        return $model['id_sub_kategori'] . ' - ' . $model['nama_sub_kategori'];
    });

    echo $form->field($model, 'id_sub_kategori', [
        'labelOptions' => [
            'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
        ]
    ])
    ->dropDownList(
        $dataPost,
        ['prompt' => 'Pilih Sub-Kategori Barang', 'id_sub_kategori' => 'id_sub_kategori']
    );
    ?>

    <?= $form->field($model, 'file_foto', [
        'labelOptions' => [
            'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
        ]
    ])
    ->fileInput()->label('Pilih Foto') ?>
    

    <div class="button-container" style="margin-top: 30px;">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Back', ['katalog-awal/index'], ['class' => 'btn btn-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
