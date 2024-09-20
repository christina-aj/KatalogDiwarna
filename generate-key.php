<?php
require __DIR__ . '/vendor/autoload.php'; // Load Yii's autoloader
require __DIR__ . '/vendor/yiisoft/yii2/Yii.php'; // Load Yii

$randomKey = Yii::$app->security->generateRandomString();
echo $randomKey;
