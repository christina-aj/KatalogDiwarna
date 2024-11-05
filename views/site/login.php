<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('@web/css/login.css');

?>
<div class="site-login">
    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    <img src="/assets/images/diwarna_logo.png" alt="images">
    <h1>Katalog Diwarna</h1>

    <div class="row">
        <div class="col-lg-12">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3 login-label', 'style' => 'color:black'],
                    'inputOptions' => ['class' => 'col-lg-3 form-control login-label-input'],
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                ],
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ]) ?>

            <div class="form-group">
                <div>
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

            <!-- <div style= "color: black;">
                Login dengan <strong>admin/admin</strong> untuk masuk ke CRUD.<br> -->
                <!-- To modify the username/password, please check out the code <code>app\models\User::$users</code>. -->
            <!-- </div> -->

        </div>
    </div>
</div>
