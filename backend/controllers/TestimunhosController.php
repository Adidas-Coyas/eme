<?php

namespace backend\controllers;

use Yii;
use app\models\Testimunhos;
use app\models\SearchTestimunhos;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TestimunhosController implements the CRUD actions for Testimunhos model.
 */
class TestimunhosController extends Controller
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
     * Lists all Testimunhos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchTestimunhos();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'data' => $this->count(),
        ]);
    }

    /**
     * Displays a single Testimunhos model.
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
     * Creates a new Testimunhos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Testimunhos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'data' => $this->count()]);
        }

        return $this->render('create', [
            'model' => $model,
            'data' => $this->count(),
        ]);
    }

    /**
     * Updates an existing Testimunhos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'data' => $this->count(),]);
        }

        return $this->render('update', [
            'model' => $model,
            'data' => $this->count(),
        ]);
    }

    /**
     * Deletes an existing Testimunhos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index', 'data' => $this->count(),]);
    }

    /**
     * Finds the Testimunhos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Testimunhos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Testimunhos::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
