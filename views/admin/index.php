<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
?>

<?php $this->beginPage() ?>
<?php $this->beginBody() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h1>Selamat datang, Admin!</h1>
    <p>Anda telah berhasil login.</p>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

