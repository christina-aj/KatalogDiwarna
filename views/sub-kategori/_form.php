<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SubKategori $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="create-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_sub_kategori', [
    'labelOptions' => [
        'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
    ]
    ])
    ->textInput(['maxlength' => true]) ?>

    <?php
    $dataPost = ArrayHelper::map(\app\models\Kategori::find()->asArray()->all(), 'id_kategori', function ($model) {
        return $model['id_kategori'] . ' - ' . $model['nama_kategori'];
    });

    echo $form->field($model, 'id_kategori', [
        'labelOptions' => [
            'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
        ]
    ])
    ->dropDownList(
        $dataPost,
        ['prompt' => 'Pilih Kategori Barang', 'id_kategori' => 'id_kategori']
    );
    ?>

    <?= $form->field($model, 'slug', [
    'labelOptions' => [
        'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
    ]
    ])
    ->textInput(['maxlength' => true]) ?>


    <div class="button-container" style="margin-top: 30px;">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Back', ['sub-kategori/index'], ['class' => 'btn btn-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
