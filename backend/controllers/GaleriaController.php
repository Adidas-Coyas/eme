<?php

namespace backend\controllers;

use Yii;
use app\models\Galeria;
use app\models\SearchGaleria;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use common\models\User;
use yii\db\Query;
use yii\web\UploadedFile;
/**
 * GaleriaController implements the CRUD actions for Galeria model.
 */
class GaleriaController extends Controller
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
     * Lists all Galeria models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchGaleria();
        //$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider = new ActiveDataProvider([
            'query' => Galeria::find(),//->where(['id_user' => $user['id']]),
            'pagination' => [
                'pageSize' => 5,
            ],
            'sort' => [
              'defaultOrder' => ['id' => SORT_DESC]
            ]

        ]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'data' => $this->count(),
        ]);
    }

    /**
     * Displays a single Galeria model.
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
     * Creates a new Galeria model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Galeria();

        if ($model->load(Yii::$app->request->post()) ) {
          $d = (new Query())->select('id')
              ->from('user')
              ->where(['username' => Yii::$app->user->identity->username])
              ->one();
          $data = date('Y-m-d h:m:s');
          $data2 = date('d-m-Y h:m:s');

          //get the instance of conteudo
          if($conteudo = UploadedFile::getInstance($model, 'conteudo')) {

              $model->conteudo = str_replace(" ", "_", substr($conteudo->baseName, 0, 10).'_G'.$data2.'.'.$conteudo->extension);
              $conteudo->saveAs('uploud/galeria/'.$model->conteudo);
          }else {
              $model->conteudo = null;
          }
          //get the anexo name
          $model->id_user = $d['id'];
          $model->created_at = $data;
          $model->save();
            return $this->redirect(['view', 'id' => $model->id, 'data' => $this->count()]);
        }

        return $this->render('create', [
            'model' => $model,
            'data' => $this->count(),
        ]);
    }

    /**
     * Updates an existing Galeria model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
          //pega nome do anedo directo da bd
          $old_conteudo = (new Query())->select('conteudo')->from('galeria')->where(['id' => $model->id])->one();

          //renomear o ficheiro
          $data = date('Y-m-d h:m:s');
          $data2 = date('d-m-Y h:m:s');

          //get instance of conteudo
          if(file_exists('uploud/galeria/'.$old_conteudo['conteudo']) && $conteudo = UploadedFile::getInstance($model, 'conteudo')) {

              $model->conteudo = str_replace(" ", "_", substr ($conteudo->baseName, 0, 10).'_G-'.$data2.'.'.$conteudo->extension);
               unlink('uploud/galeria/'.$old_conteudo['conteudo']);
              //echo "file ".$old_conteudo['conteudo']." existe";
              $conteudo->saveAs('uploud/galeria/'.$model->conteudo);
          }else {
              $model->conteudo = $old_conteudo['conteudo'];
          }

          $model->updated_at = $data;
          $model->save();
          return $this->redirect(['view', 'id' => $model->id, 'data' => $this->count()]);
        }

        return $this->render('update', [
            'model' => $model,
            'data' => $this->count(),
        ]);
    }

    /**
     * Deletes an existing Galeria model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $old_conteudo = (new Query())->select('conteudo')->from('galeria')->where(['id' => $model->id])->one();

        if(file_exists('uploud/galeria/'.$old_conteudo['conteudo']) ) {
            unlink('uploud/galeria/'.$old_conteudo['conteudo']);
            $model->delete();
        }else {
            $model->delete();
        }

        return $this->redirect(['index', 'data' => $this->count()]);
    }

    /**
     * Finds the Galeria model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Galeria the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Galeria::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
