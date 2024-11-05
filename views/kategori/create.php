<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Kategori $model */

$this->title = 'Create Kategori';
$this->params['breadcrumbs'][] = ['label' => 'Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="create-form">

    <h1 style="color:black; padding-bottom:20px;"> Buat Kategori </h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
