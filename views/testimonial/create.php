<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Testimonial $model */

$this->title = 'Create Testimonial';
$this->params['breadcrumbs'][] = ['label' => 'Testimonials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="create-form">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
     
    <h1 style="color:black; padding-bottom:20px;"> Tambah Testimonial </h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
