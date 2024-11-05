<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\FotoProduk $model */

$this->title = 'Update Foto Produk: ' . $model->id_foto_produk;
$this->params['breadcrumbs'][] = ['label' => 'Foto Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_foto_produk, 'url' => ['view', 'id_foto_produk' => $model->id_foto_produk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="create-form">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1 style="color:black; padding-bottom:20px;"> Update Foto Produk </h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
