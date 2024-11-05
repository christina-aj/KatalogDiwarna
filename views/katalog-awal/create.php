<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\KatalogAwal $model */

$this->title = 'Create Katalog Awal';
$this->params['breadcrumbs'][] = ['label' => 'Katalog Awals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="create-form">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1 style="color:black; padding-bottom:20px;"> Tambah Foto Katalog Home </h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
