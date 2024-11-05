<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Kategori $model */

$this->title = $model->id_kategori;
$this->params['breadcrumbs'][] = ['label' => 'Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pc-content">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1 style="color:black; padding-bottom:20px;"> Detail Kategori </h1>

    <?= DetailView::widget([
        'model' => $model,
        // 'options' => ['class' => 'detail-text'],
        'attributes' => [
            'id_kategori',
            'nama_kategori',
            'slug',
            'status',
        ],
    ]) ?>

    <div class="button-container">
        <?= Html::a('Update', ['update', 'id_kategori' => $model->id_kategori], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_kategori' => $model->id_kategori], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back', ['kategori/index'], ['class' => 'btn btn-secondary']) ?>
    </div>

</div>
