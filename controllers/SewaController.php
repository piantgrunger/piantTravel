<?php

namespace app\controllers;

use Yii;
use app\models\sewa;
use app\models\sewaSearch;
use app\models\kendaraan;
use app\models\paket;


use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\d_sewa_kendaraan;
use app\models\d_sewa_sopir;

use yii\helpers\Json;
/**
 * SewaController implements the CRUD actions for sewa model.
 */
class SewaController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all sewa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new sewaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single sewa model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new sewa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new sewa();
        
        $model->tgl_sewa=date('Y-m-d');
        $model->tgl_pemesanan=date('Y-m-d');
        $model->jam_sewa='12:00:00 Am';
        $model->tgl_pengembalian=date('Y-m-d');
        $model->jam_pengembalian='12:00:00 Am';
        $model->DP_rp = 0;
        $model->total_sewa_kendaraan=0;
        $model->total_sewa_sopir=0;
        $model->total=0;
                
        
        

        if ($model->load(Yii::$app->request->post()) ) {

            $transaction = Yii::$app->db->beginTransaction();
            try {
                $model->detailKendaraan = Yii::$app->request->post('d_sewa_kendaraan', []);
                $model->detailSopir = Yii::$app->request->post('d_sewa_sopir', []);
             
                if ($model->save()) {
                    $transaction->commit();
                    return $this->redirect(['view', 'id' => $model->id_sewa]);
                }
                $transaction->rollBack();
            } catch (\Exception $ecx) {
                $transaction->rollBack();
                throw $ecx;
            }
     
        } else {
            return $this->render('create', [
                'model' => $model,
                
                
            ]);
        }
    }

    /**
     * Updates an existing sewa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        
        if ($model->load(Yii::$app->request->post()) ) {

            $transaction = Yii::$app->db->beginTransaction();
            try {
                $model->detailKendaraan = Yii::$app->request->post('d_sewa_kendaraan', []);
                $model->detailSopir = Yii::$app->request->post('d_sewa_sopir', []);
                 
                if ($model->save()) {
                    $transaction->commit();
                    return $this->redirect(['view', 'id' => $model->id_sewa]);
                }
              
                $transaction->rollBack();
            } catch (\Exception $ecx) {
                $transaction->rollBack();
                throw $ecx;
            }
     
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionKendaraan()
    {
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            $id_jns = $_POST['depdrop_parents'];
                $out = Kendaraan::getDataKendaraan($id_jns); 
                // the getDefaultSubCat function will query the database
                // and return the default sub cat for the cat_id
                
                echo Json::encode(['output'=>$out, 'selected'=>'']);
                return;
        }
        echo Json::encode(['output'=>'', 'selected'=>'']);
        

    }


    public function actionPaket()
    {
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            $id_jns = $_POST['depdrop_parents'];
                $out = Paket::getDataPaket($id_jns); 
                // the getDefaultSubCat function will query the database
                // and return the default sub cat for the cat_id
                
                echo Json::encode(['output'=>$out, 'selected'=>'']);
                return;
        }
        echo Json::encode(['output'=>'', 'selected'=>'']);
        

    }

    /**
     * Deletes an existing sewa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        
       try
      {
        $this->findModel($id)->delete();
      
      }
      catch(\yii\db\IntegrityException  $e)
      {
	Yii::$app->session->setFlash('error', "Data Tidak Dapat Dihapus Karena Dipakai Modul Lain");
       } 
         return $this->redirect(['index']);
    }

    /**
     * Finds the sewa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return sewa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = sewa::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
