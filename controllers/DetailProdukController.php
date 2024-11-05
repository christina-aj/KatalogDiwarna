<?php

namespace app\controllers;

use app\models\DetailProduk;
use app\models\DetailProdukSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetailProdukController implements the CRUD actions for DetailProduk model.
 */
class DetailProdukController extends Controller
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
     * Lists all DetailProduk models.
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
        $searchModel = new DetailProdukSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DetailProduk model.
     * @param int $id_detail_p Id Detail P
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_detail_p)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_detail_p),
        ]);
    }

    /**
     * Creates a new DetailProduk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DetailProduk();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_detail_p' => $model->id_detail_p]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DetailProduk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_detail_p Id Detail P
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_detail_p)
    {
        $model = $this->findModel($id_detail_p);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_detail_p' => $model->id_detail_p]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DetailProduk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_detail_p Id Detail P
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_detail_p)
    {
        $this->findModel($id_detail_p)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DetailProduk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_detail_p Id Detail P
     * @return DetailProduk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_detail_p)
    {
        if (($model = DetailProduk::findOne(['id_detail_p' => $id_detail_p])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
