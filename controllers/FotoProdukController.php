<?php

namespace app\controllers;

use app\models\FotoProduk;
use app\models\FotoProdukSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * FotoProdukController implements the CRUD actions for FotoProduk model.
 */
class FotoProdukController extends Controller
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
     * Lists all FotoProduk models.
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
        $searchModel = new FotoProdukSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FotoProduk model.
     * @param int $id_foto_produk Id Foto Produk
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_foto_produk)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_foto_produk),
        ]);
    }

    /**
     * Creates a new FotoProduk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new FotoProduk();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {

                $model->file_foto_produk = UploadedFile::getInstance($model, 'file_foto_produk');

                $foto = uniqid('foto-produk-diwarna-', true);
                $model->url_foto_produk = '/assets/images/produk/'.$foto.'.'.$model->file_foto_produk->extension;
                $model->file_foto_produk = UploadedFile::getInstance($model, 'file_foto_produk');

                $simpan_di_directory = 'assets/images/produk/'.$foto.'.'.$model->file_foto_produk->extension;
                $model->file_foto_produk->saveAs($simpan_di_directory, false); 

                $model->save();
                return $this->redirect(['view', 'id_foto_produk' => $model->id_foto_produk]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing FotoProduk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_foto_produk Id Foto Produk
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_foto_produk)
    {
        $model = $this->findModel($id_foto_produk);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_foto_produk' => $model->id_foto_produk]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FotoProduk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_foto_produk Id Foto Produk
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_foto_produk)
    {
        $this->findModel($id_foto_produk)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FotoProduk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_foto_produk Id Foto Produk
     * @return FotoProduk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_foto_produk)
    {
        if (($model = FotoProduk::findOne(['id_foto_produk' => $id_foto_produk])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
