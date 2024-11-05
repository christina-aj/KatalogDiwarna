<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\FotoProduk $model */

$this->title = 'Create Foto Produk';
$this->params['breadcrumbs'][] = ['label' => 'Foto Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="create-form">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1 style="color:black; padding-bottom:20px;"> Tambah Foto Produk (About) </h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
