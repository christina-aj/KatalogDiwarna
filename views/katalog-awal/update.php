<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\KatalogAwal $model */

$this->title = 'Update Katalog Awal: ' . $model->katalog_awal_id;
$this->params['breadcrumbs'][] = ['label' => 'Katalog Awals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->katalog_awal_id, 'url' => ['view', 'katalog_awal_id' => $model->katalog_awal_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="create-form">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <h1 style="color:black; padding-bottom:20px;"> Update Detail Foto Katalog </h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
