<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\DetailProduk $model */

$this->title = $model->id_detail_p;
$this->params['breadcrumbs'][] = ['label' => 'Detail Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pc-content">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1 style="color:black; padding-bottom:20px;"> Detail Produk </h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_detail_p',
            'katalog_awal_id',
            'deskripsi_detail_p:ntext',
            'bahan_detail_p',
            'minim_detail_p',
            'custom_detail_p',
            'penutup_detail_p:ntext',
        ],
    ]) ?>

    <div class="button-container">  
        <?= Html::a('Update', ['update', 'id_detail_p' => $model->id_detail_p], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_detail_p' => $model->id_detail_p], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back', ['detail-produk/index'], ['class' => 'btn btn-secondary']) ?>
    </div>

</div>
