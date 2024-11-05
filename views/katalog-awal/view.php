<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\KatalogAwal $model */

$this->title = $model->katalog_awal_id;
$this->params['breadcrumbs'][] = ['label' => 'Katalog Awals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pc-content">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1 style="color:black; padding-bottom:20px;"> Detail Foto Katalog </h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'katalog_awal_id',
            'alt_k_awal',
            'text_k_awal',
            'desc_k_awal',
            'url_k_awal:url',
            // 'id_sub_kategori',
            'subKategori.nama_sub_kategori',
            'slug',
        ],
    ]) ?>

    <div class="button-container">
        <?= Html::a('Update', ['update', 'katalog_awal_id' => $model->katalog_awal_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'katalog_awal_id' => $model->katalog_awal_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back', ['katalog-awal/index'], ['class' => 'btn btn-secondary']) ?>
    </div>

</div>
