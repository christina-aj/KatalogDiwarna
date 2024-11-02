<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\KatalogAwal;
use app\models\FotoProduk;
use app\models\Kategori;
use app\models\FotoSlide;
use app\models\Testimonial;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    // public function actionIndex()
    // {
    //     return $this->render('index');
    // }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function beforeAction($action)
    {
        if ($action->id === 'login') {
            // Gunakan layout blank khusus untuk halaman login
            $this->layout = 'blank';
        }
        return parent::beforeAction($action);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(['/admin/index']); // Redirect ke halaman admin jika sudah login
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['/admin/index']); // Redirect ke halaman admin setelah login berhasil
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    //  public function actionLogin()
    // {
    //     if (!Yii::$app->user->isGuest) {
    //         return $this->goHome();
    //     }

    //     $model = new LoginForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->login()) {
    //         return $this->goBack();
    //     }

    //     $model->password = '';
    //     return $this->render('login', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */

    public function actionContactDiwarna()
    {
        return $this->render('contact-diwarna');
    }
    

    // public function actionEventDetail()
    // {
    //     return $this->render('event-detail');
    // }


    public function actionEventDetail($id)
    {
    // Ambil data dari tabel katalog_awal berdasarkan ID yang dipilih dan join dengan detail_produk
    $katalogAwal = KatalogAwal::find()
        ->with('detailProduk')  // Mengambil data dari tabel detail_produk
        ->where(['katalog_awal_id' => $id])
        ->one();

    if ($katalogAwal === null) {
        throw new \yii\web\NotFoundHttpException('Produk tidak ditemukan');
    }

    // Tampilkan view event-detail dan kirim data produk dari tabel katalog_awal
    return $this->render('event-detail', ['katalogAwal' => $katalogAwal]);
    }
    

    public function actionIndex()
    {
        // Mengambil semua data dari tabel katalog_awal
        // $katalog_awal = KatalogAwal::find()->all();
        $katalog_awal = KatalogAwal::find()
            ->joinWith('subKategori.kategori')
            ->where(['kategori.status' => 1])
            ->all();
        $kategori = Kategori::find()->where(['status' => 1])->all();
        $foto_slide = FotoSlide::find()->all();

        // Mengirim data ke view
        return $this->render('index', [
            'katalog_awal' => $katalog_awal,
            'kategori' => $kategori,
            'foto_slide' => $foto_slide,
        ]);
    }

    public function actionAboutDiwarna()
    {
        $foto_produk = FotoProduk::find()->all();
        $testimonial = Testimonial::find()->all();

        return $this->render('about-diwarna', [
            'foto_produk' => $foto_produk,
            'testimonial' => $testimonial,
        ]);
    }
}
