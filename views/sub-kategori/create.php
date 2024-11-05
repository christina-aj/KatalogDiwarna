<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\SubKategori $model */

$this->title = 'Create Sub Kategori';
$this->params['breadcrumbs'][] = ['label' => 'Sub Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="create-form">

    <h1 style="color:black; padding-bottom:20px;"> Buat Sub-Kategori </h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
