<?php

namespace app\controllers;

use app\models\KatalogAwal;
use app\models\KatalogAwalSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * KatalogAwalController implements the CRUD actions for KatalogAwal model.
 */
class KatalogAwalController extends Controller
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
     * Lists all KatalogAwal models.
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
        $searchModel = new KatalogAwalSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KatalogAwal model.
     * @param int $katalog_awal_id Katalog Awal ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($katalog_awal_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($katalog_awal_id),
        ]);
    }

    /**
     * Creates a new KatalogAwal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new KatalogAwal();
        // $foto = uniqid('foto-katalog-'.'', true);
        // echo $foto;exit;

        if ($this->request->isPost) {
            
            if ($model->load($this->request->post())) {


                $model->file_foto = UploadedFile::getInstance($model, 'file_foto');

                $foto = uniqid('foto-katalog-diwarna-', true);
                $model->url_k_awal = '/assets/images/katalog/'.$foto.'.'.$model->file_foto->extension;
                $model->file_foto = UploadedFile::getInstance($model, 'file_foto');

                $simpan_di_directory = 'assets/images/katalog/'.$foto.'.'.$model->file_foto->extension;
                $model->file_foto->saveAs($simpan_di_directory, false); 

                $model->save();
                return $this->redirect(['view', 'katalog_awal_id' => $model->katalog_awal_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing KatalogAwal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $katalog_awal_id Katalog Awal ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($katalog_awal_id)
    {
        $model = $this->findModel($katalog_awal_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'katalog_awal_id' => $model->katalog_awal_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing KatalogAwal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $katalog_awal_id Katalog Awal ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($katalog_awal_id)
    {
        $this->findModel($katalog_awal_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the KatalogAwal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $katalog_awal_id Katalog Awal ID
     * @return KatalogAwal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($katalog_awal_id)
    {
        if (($model = KatalogAwal::findOne(['katalog_awal_id' => $katalog_awal_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
