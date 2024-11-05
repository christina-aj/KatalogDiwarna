<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\SubKategori $model */

$this->title = $model->id_sub_kategori;
$this->params['breadcrumbs'][] = ['label' => 'Sub Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pc-content">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1 style="color:black; padding-bottom:20px;"> Detail Sub-Kategori </h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_sub_kategori',
            'nama_sub_kategori',
            // 'id_kategori',
            'kategori.nama_kategori',
            'slug',
        ],
    ]) ?>

    <div class="button-container">
        <?= Html::a('Update', ['update', 'id_sub_kategori' => $model->id_sub_kategori], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_sub_kategori' => $model->id_sub_kategori], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back', ['sub-kategori/index'], ['class' => 'btn btn-secondary']) ?>
    </div>

</div>
