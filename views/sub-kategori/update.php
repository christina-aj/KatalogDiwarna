<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\SubKategori $model */

$this->title = 'Update Sub Kategori: ' . $model->id_sub_kategori;
$this->params['breadcrumbs'][] = ['label' => 'Sub Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_sub_kategori, 'url' => ['view', 'id_sub_kategori' => $model->id_sub_kategori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="create-form">

    <h1 style="color:black; padding-bottom:20px;"> Update Sub-Kategori </h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
