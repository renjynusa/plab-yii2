<?php

namespace app\controllers;

use Yii;
use app\models\MenuNavigasi;
use app\models\MenuNavigasiSubSearch;
use app\models\MenuNavigasiSearch;
use app\models\MenuNavigasiRole;
use app\models\Systemrole;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * MenuNavigasiController implements the CRUD actions for MenuNavigasi model.
 */
class MenuNavigasiController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all MenuNavigasi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MenuNavigasiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $dataProvider->pagination->pageSize=100;

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MenuNavigasi model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if (Yii::$app->user->isGuest) { 
            header("Location: index.php");
            exit;
        }

        $searchModel = new MenuNavigasiSubSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $jumlahSubmenu = MenuNavigasi::find()->where(["id_parent"=>$id])->count();

        $hakakses = Systemrole::find()->orderBy("nama_role")->all();

         if (Yii::$app->request->isPost)
        {
        if (is_array(Yii::$app->request->post('data')))
        {
            MenuNavigasiRole::deleteAll(["id_menu"=>$id]);
            //echo var_dump(Yii::$app->request->post('data'))."<br>";
            foreach (Yii::$app->request->post('data') as $key => $data)
            {
                $cek = MenuNavigasiRole::find()->where(["id_system_role"=>$key, "id_menu"=>$id])->count();
                if ($cek < 1)
                {
                    $simpan = new MenuNavigasiRole();
                    $simpan->id_system_role = $key;
                    $simpan->id_menu = $id;
                    $simpan->save(false);
                    
                }
                
            }

            Yii::$app->session->setFlash("success","Data hak akses berhasil disimpan.");
        }
        else
        {
            MenuNavigasiRole::deleteAll(["id_menu"=>$id]);
        }
        }


        return $this->render('view', [
            'model' => $this->findModel($id),
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'jumlahSubmenu' => $jumlahSubmenu,
            'hakakses' => $hakakses,
        ]);
    }

 

    /**
     * Creates a new MenuNavigasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MenuNavigasi();
        $menuParent = Arrayhelper::map(MenuNavigasi::find()
        ->where(["id_parent"=>0])
        ->orderBy("nama_menu")->all(), "id_menu", "nama_menu");

        if ($model->load(Yii::$app->request->post())) {

            if ($model->id_parent == "") $model->id_parent = "0";


            $menu = MenuNavigasi::find()->select("max(no_urut)+1 as no_urut")
            ->where(["id_parent"=>$model->id_parent])->one();

             
            if ($menu->no_urut == "") $menu->no_urut = "1";

            $model->no_urut = $menu->no_urut;
            $model->save(false);

            return $this->redirect(['view', 'id' => $model->id_menu]);
        }

        return $this->render('create', [
            'model' => $model,
            'menuParent' => $menuParent,
        ]);
    }

    /**
     * Updates an existing MenuNavigasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $menuParent = Arrayhelper::map(MenuNavigasi::find()
        ->where(["id_parent"=>0])
        ->orderBy("nama_menu")->all(), "id_menu", "nama_menu");

        if ($model->load(Yii::$app->request->post())) {

            if ($model->id_parent == "") $model->id_parent = "0"; 
            $model->save(false);

            return $this->redirect(['view', 'id' => $model->id_menu]);
        }

        return $this->render('update', [
            'model' => $model,
            'menuParent' => $menuParent,
        ]);
    }

    /**
     * Deletes an existing MenuNavigasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MenuNavigasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MenuNavigasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MenuNavigasi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
