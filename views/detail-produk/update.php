<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DetailProduk $model */

$this->title = 'Update Detail Produk: ' . $model->id_detail_p;
$this->params['breadcrumbs'][] = ['label' => 'Detail Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_detail_p, 'url' => ['view', 'id_detail_p' => $model->id_detail_p]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="create-form">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1 style="color:black; padding-bottom:20px;"> Update Detail Produk </h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
