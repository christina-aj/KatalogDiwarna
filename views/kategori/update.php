<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Kategori $model */

$this->title = 'Update Kategori: ' . $model->id_kategori;
$this->params['breadcrumbs'][] = ['label' => 'Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kategori, 'url' => ['view', 'id_kategori' => $model->id_kategori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="create-form">

<h1 style="color:black; padding-bottom:20px;"> Update Kategori </h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
