<?php

namespace app\controllers;

use app\models\SubKategori;
use app\models\SubKategoriSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SubKategoriController implements the CRUD actions for SubKategori model.
 */
class SubKategoriController extends Controller
{
    /**
     * @inheritDoc
     */
    public $layout = 'admin';
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all SubKategori models.
     *
     * @return string
     */
    public function beforeAction($action) 
    { 
        $this->enableCsrfValidation = false; 
        return parent::beforeAction($action); 
    }
    public function actionIndex()
    {
        $searchModel = new SubKategoriSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SubKategori model.
     * @param int $id_sub_kategori Id Sub Kategori
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_sub_kategori)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_sub_kategori),
        ]);
    }

    /**
     * Creates a new SubKategori model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SubKategori();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_sub_kategori' => $model->id_sub_kategori]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SubKategori model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_sub_kategori Id Sub Kategori
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_sub_kategori)
    {
        $model = $this->findModel($id_sub_kategori);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_sub_kategori' => $model->id_sub_kategori]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SubKategori model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_sub_kategori Id Sub Kategori
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_sub_kategori)
    {
        $this->findModel($id_sub_kategori)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SubKategori model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_sub_kategori Id Sub Kategori
     * @return SubKategori the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_sub_kategori)
    {
        if (($model = SubKategori::findOne(['id_sub_kategori' => $id_sub_kategori])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
