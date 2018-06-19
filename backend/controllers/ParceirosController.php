<?php

namespace backend\controllers;

use Yii;
use app\models\Parceiros;
use app\models\SearchParceiros;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\web\UploadedFile;

/**
 * ParceirosController implements the CRUD actions for Parceiros model.
 */
class ParceirosController extends Controller
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

    public function count(){
        $data['user'] = (new \yii\db\Query())->from('user')->where(['status' => 10])->count();
        $data['post'] = (new \yii\db\Query())->from('post')->count();
        $data['comentario'] = (new \yii\db\Query())->from('comentario')->count();
        $data['parceiro'] = (new \yii\db\Query())->from('parceiros')->count();
        $data['galeria'] = (new \yii\db\Query())->from('galeria')->count();

        return $data;
    }

    /**
     * Lists all Parceiros models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchParceiros();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'data' => $this->count(),
        ]);
    }

    /**
     * Displays a single Parceiros model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
            'data' => $this->count(),
        ]);
    }

    /**
     * Creates a new Parceiros model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Parceiros();

        if ($model->load(Yii::$app->request->post())) {
          $data2 = date('d-m-Y h:m:s');
          //get the instance of anexo
          if($logo = UploadedFile::getInstance($model, 'logo')) {
            // substituir todos os espacos nos files por _ e concatenar com E"datade hoje"
              $model->logo = str_replace(" ", "_", substr ($logo->baseName, 0, 10).'_PA'.$data2.'.'.$logo->extension);
              $logo->saveAs('uploud/parceiros/'.$model->logo);
          }
          $model->save();
            return $this->redirect(['view', 'id' => $model->id, 'data' => $this->count()]);
        }

        return $this->render('create', [
            'model' => $model,
            'data' => $this->count(),
        ]);
    }

    /**
     * Updates an existing Parceiros model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
          $old_logo = (new Query())->select('logo')->from('parceiros')->where(['id' => $model->id])->one();

          //renomear o ficheiro
          $data = date('d-m-Y h:m:s');

          //get instance of foto
          if(file_exists('uploud/parceiros/'.$old_logo['logo']) && $logo = UploadedFile::getInstance($model, 'logo')) {

              $model->logo = str_replace(" ", "_", substr ($logo->baseName, 0, 10).'_PA'.$data.'.'.$logo->extension);
               unlink('uploud/parceiros/'.$old_logo['logo']);
              //echo "file ".$old_logo['logo']." existe";
              $logo->saveAs('uploud/parceiros/'.$model->logo);
          }else {
              $model->logo = $old_logo['logo'];
          }


          $model->save();
            return $this->redirect(['view', 'id' => $model->id, 'data' => $this->count()]);
        }

        return $this->render('update', [
            'model' => $model,
            'data' => $this->count(),
        ]);
    }

    /**
     * Deletes an existing Parceiros model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
      $model = $this->findModel($id);
      $old_logo = (new Query())->select('logo')->from('parceiros')->where(['id' => $model->id])->one();

      if(file_exists('uploud/parceiros/'.$old_logo['logo']) ) {
          unlink('uploud/parceiros/'.$old_logo['logo']);
          $model->delete();
      }else {
          $model->delete();
      }
        return $this->redirect(['index', 'data' => $this->count()]);
    }

    /**
     * Finds the Parceiros model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Parceiros the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Parceiros::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
