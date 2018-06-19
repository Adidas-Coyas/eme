<?php

namespace backend\controllers;

use Yii;
use app\models\Portfolio;
use app\models\SearchPortfolio;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\web\UploadedFile;

/**
 * PortfolioController implements the CRUD actions for Portfolio model.
 */
class PortfolioController extends Controller
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
     * Lists all Portfolio models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchPortfolio();
      //  $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider = new ActiveDataProvider([
            'query' => Portfolio::find(),//->where(['id_user' => $user['id']]),
            'pagination' => [
                'pageSize' => 5,
            ],
            'sort' => [
              'defaultOrder' => ['created_at' => SORT_DESC]
            ]

        ]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'data' => $this->count(),
        ]);
    }

    /**
     * Displays a single Portfolio model.
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
     * Creates a new Portfolio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Portfolio();

        if ($model->load(Yii::$app->request->post())) {
        /*  $d = (new Query())->select('id')
              ->from('user')
              ->where(['username' => Yii::$app->user->identity->username])
              ->one();*/
          $data = date('Y-m-d h:m:s');
          $data2 = date('d-m-Y h:m:s');
          //get the instance of anexo
          if($foto = UploadedFile::getInstance($model, 'foto')) {
              $model->foto = str_replace(" ", "_", substr ($foto->baseName, 0, 10).'_P'.$data2.'.'.$foto->extension);
              $foto->saveAs('uploud/portfolio/'.$model->foto);
          }else {
              $model->foto = null;
          }
          //get the anexo name
          //$model->id_user = $d['id'];
          $model->created_at = $data;
          $model->save();
            return $this->redirect(['view', 'id' => $model->id, 'data' => $this->count(),]);
        }

        return $this->render('create', [
            'model' => $model,
            'data' => $this->count(),
        ]);
    }

    /**
     * Updates an existing Portfolio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
          $old_foto = (new Query())->select('foto')->from('portfolio')->where(['id' => $model->id])->one();
        
          //renomear o ficheiro
          $data = date('Y-m-d h:m:s');
          $data2 = date('d-m-Y h:m:s');

          //get instance of foto
          if(file_exists('uploud/portfolio/'.$old_foto['foto']) && $foto = UploadedFile::getInstance($model, 'foto')) {

              $model->foto = str_replace(" ", "_", substr ($foto->baseName, 0, 10).'_P'.$data2.'.'.$foto->extension);
               unlink('uploud/portfolio/'.$old_foto['foto']);
              //echo "file ".$old_foto['foto']." existe";
              $foto->saveAs('uploud/portfolio/'.$model->foto);
          }else {
              $model->foto = $old_foto['foto'];
          }

          $model->updated_at = $data;
          $model->save();
            return $this->redirect(['view', 'id' => $model->id, 'data' => $this->count(),]);
        }

        return $this->render('update', [
            'model' => $model,
            'data' => $this->count(),
        ]);
    }

    /**
     * Deletes an existing Portfolio model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
      $model = $this->findModel($id);
      $old_foto = (new Query())->select('foto')->from('portfolio')->where(['id' => $model->id])->one();

      if(file_exists('uploud/portfolio/'.$old_foto['foto']) ) {
          unlink('uploud/portfolio/'.$old_foto['foto']);
          $model->delete();
      }else {
          $model->delete();
      }

        return $this->redirect(['index', 'data' => $this->count(),]);
    }

    /**
     * Finds the Portfolio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Portfolio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Portfolio::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
