<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Testimonial $model */

$this->title = $model->id_testi;
$this->params['breadcrumbs'][] = ['label' => 'Testimonials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pc-content">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    
    <h1 style="color:black; padding-bottom:20px;"> Detail Testimonial </h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_testi',
            'nama_testi',
            'note_testi',
            'desc_testi:ntext',
        ],
    ]) ?>

    <div class="button-container"> 
        <?= Html::a('Update', ['update', 'id_testi' => $model->id_testi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_testi' => $model->id_testi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back', ['testimonial/index'], ['class' => 'btn btn-secondary']) ?>
    </div>

</div>
