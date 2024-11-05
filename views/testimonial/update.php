<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Testimonial $model */

$this->title = 'Update Testimonial: ' . $model->id_testi;
$this->params['breadcrumbs'][] = ['label' => 'Testimonials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_testi, 'url' => ['view', 'id_testi' => $model->id_testi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="create-form">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    
    <h1 style="color:black; padding-bottom:20px;"> Update Testimonial </h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
