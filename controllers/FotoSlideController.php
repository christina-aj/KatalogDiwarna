<?php

namespace app\controllers;

use app\models\FotoSlide;
use app\models\FotoSlideSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * FotoSlideController implements the CRUD actions for FotoSlide model.
 */
class FotoSlideController extends Controller
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
     * Lists all FotoSlide models.
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
        $searchModel = new FotoSlideSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FotoSlide model.
     * @param int $id_foto_slide Id Foto Slide
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_foto_slide)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_foto_slide),
        ]);
    }

    /**
     * Creates a new FotoSlide model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new FotoSlide();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {

                $model->file_foto_slide = UploadedFile::getInstance($model, 'file_foto_slide');

                $foto = uniqid('foto-slide-diwarna-', true);
                $model->url_foto_slide = '/assets/images/produk/'.$foto.'.'.$model->file_foto_slide->extension;
                $model->file_foto_slide = UploadedFile::getInstance($model, 'file_foto_slide');

                $simpan_di_directory = 'assets/images/produk/'.$foto.'.'.$model->file_foto_slide->extension;
                $model->file_foto_slide->saveAs($simpan_di_directory, false); 

                $model->save();
                return $this->redirect(['view', 'id_foto_slide' => $model->id_foto_slide]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing FotoSlide model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_foto_slide Id Foto Slide
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_foto_slide)
    {
        $model = $this->findModel($id_foto_slide);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_foto_slide' => $model->id_foto_slide]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FotoSlide model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_foto_slide Id Foto Slide
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_foto_slide)
    {
        $this->findModel($id_foto_slide)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FotoSlide model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_foto_slide Id Foto Slide
     * @return FotoSlide the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_foto_slide)
    {
        if (($model = FotoSlide::findOne(['id_foto_slide' => $id_foto_slide])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
