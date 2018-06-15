<?php

namespace backend\controllers;

use common\models\User;
use Yii;
use app\models\Post;
use app\models\Comentario;
use app\models\SearchPost;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends Controller
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
        $data['user'] = (new Query())->from('user')->where(['status' => 10])->count();
        $data['post'] = (new Query())->from('post')->count();
        $data['comentario'] = (new Query())->from('comentario')->count();
        $data['parceiro'] = (new Query())->from('parceiros')->count();

        return $data;
    }

    /**
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchPost();
        //$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider = new ActiveDataProvider([
            'query' => Post::find(),
            'pagination' => [
                'pageSize' => 5,
            ],

        ]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'data' => $this->count(),
        ]);
    }

    /**
     * Displays a single Post model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $comentario = new Comentario();
        $data = date('Y-m-d h:m:s');

        $coment = (new Query())->select('*')->from('comentario')->where(['id_post' => $model->id])->all();
        $searchModel = new SearchPost();
        //$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider = new ActiveDataProvider([
            'query' => Comentario::find(),
            'pagination' => [
                'pageSize' => 5,
            ],

        ]);


        if ($comentario->load(Yii::$app->request->post()) ) {
            $comentario->created_at = $data;
            echo "criar: ".$comentario->created_at."<br>";
            $comentario->updated_at = null;
            echo "update: ".$comentario->updated_at."<br>";
            $comentario->respondeu = 0;
            echo "respondeu: ".$comentario->respondeu."<br>";
            $comentario->id_post = $model->id;
            echo "post: ".$comentario->id_post."<br>";




            if($comentario->save()){
                echo "Comentario criado com sucesso<br>";
            }else {
                echo "Caregado mas não guardado";
            }
           // return $this->redirect(['view', 'id' => $model->id, 'data' => $this->count()]);

            //die;
        }else {
            echo "os campos nao forom caregados<br>";
            //die;
        }



        return $this->render('view', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'comentario' => $comentario,
            'data' => $this->count(),
            'coment' => $coment,
        ]);
    }

    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Post();

        if ($model->load(Yii::$app->request->post())) {
            $d = (new Query())->select('id')
                ->from('user')
                ->where(['username' => Yii::$app->user->identity->username])
                ->one();
            $data = date('Y-m-d h:m:s');
            //get the instance of anexo
            if($anexo = UploadedFile::getInstance($model, 'anexo')) {
                $model->anexo = str_replace(" ", "_", substr ($anexo->baseName, 0, 10).'_post-'.$data.'.'.$anexo->extension);
                $anexo->saveAs('uploud/post/'.$model->anexo);
            }else {
                $model->anexo = null;
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
     * Updates an existing Post model.
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
            $old_anexo = (new Query())->select('anexo')->from('post')->where(['id' => $model->id])->one();

            //renomear o ficheiro
            $data = date('Y-m-d h:m:s');

            //get instance of anexo
            if(file_exists('uploud/post/'.$old_anexo['anexo']) && $anexo = UploadedFile::getInstance($model, 'anexo')) {

                $model->anexo = str_replace(" ", "_", substr ($anexo->baseName, 0, 10).'_post-'.$data.'.'.$anexo->extension);
                 unlink('uploud/post/'.$old_anexo['anexo']);
                //echo "file ".$old_anexo['anexo']." existe";
                $anexo->saveAs('uploud/post/'.$model->anexo);
            }else {
                $model->anexo = $old_anexo['anexo'];
            }

            $model->update_at = $data;
            $model->save();
            return $this->redirect(['view', 'id' => $model->id, 'data' => $this->count()]);
        }

        return $this->render('update', [
            'model' => $model,
            'data' => $this->count(),
        ]);
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {

        $model = $this->findModel($id);
        $old_anexo = (new Query())->select('anexo')->from('post')->where(['id' => $model->id])->one();

        if(file_exists('uploud/post/'.$old_anexo['anexo']) ) {
            unlink('uploud/post/'.$old_anexo['anexo']);
            $model->delete();
        }else {
            $model->delete();
        }

        return $this->redirect(['index', 'data' => $this->count(),]);
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
