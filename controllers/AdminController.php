<?php

namespace app\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;

class AdminController extends Controller
{
    public $layout = 'admin'; // Menggunakan layout admin untuk semua halaman admin

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'], // Hanya user yang sudah login
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}