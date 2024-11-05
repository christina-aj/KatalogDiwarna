<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DetailProduk $model */

$this->title = 'Create Detail Produk';
$this->params['breadcrumbs'][] = ['label' => 'Detail Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="create-form">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1 style="color:black; padding-bottom:20px;"> Tambah Detail Produk </h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
