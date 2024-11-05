<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Testimonial $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="create-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_testi',  [
    'labelOptions' => [
        'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
    ]
    ])
    ->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note_testi',  [
    'labelOptions' => [
        'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
    ]
    ])
    ->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc_testi',  [
    'labelOptions' => [
        'style' => 'color:black; font-size: 18px; padding-bottom: 10px; padding-top: 10px;'
    ]
    ])
    ->textarea(['rows' => 6]) ?>

    <div class="button-container" style="margin-top: 30px;">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Back', ['testimonial/index'], ['class' => 'btn btn-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
