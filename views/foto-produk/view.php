<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\FotoProduk $model */

$this->title = $model->id_foto_produk;
$this->params['breadcrumbs'][] = ['label' => 'Foto Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pc-content">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1 style="color:black; padding-bottom:20px;"> Detail Foto Produk (About) </h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_foto_produk',
            'alt_foto_produk',
            'text_foto_produk',
            'desc_foto_produk',
            'url_foto_produk:url',
        ],
    ]) ?>

    <div class="button-container">
        <?= Html::a('Update', ['update', 'id_foto_produk' => $model->id_foto_produk], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_foto_produk' => $model->id_foto_produk], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back', ['foto-produk/index'], ['class' => 'btn btn-secondary']) ?>
    </div>

</div>
