<?php

namespace backend\controllers;

use common\models\FileUpload;
use common\models\ImageUpload;
use Yii;
use common\models\Biotransprocess;
use backend\models\search\BiotransprocessSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BiotransprocessController implements the CRUD actions for Biotransprocess model.
 */
class BiotransprocessController extends BackendController
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
     * Lists all Biotransprocess models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BiotransprocessSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Biotransprocess model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Biotransprocess model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Biotransprocess();

        $upload = new FileUpload();
        if ($model->load(Yii::$app->request->post())) {
            $model->country_id = Yii::$app->session['country'];
            $model->language_id = Yii::$app->session['lang'];
            $file1 = UploadedFile::getInstance($model, 'imagea');
            $file2 = UploadedFile::getInstance($model, 'imageb');
            if($file1 == null && $file2 == null){
                $model->save();
            }elseif($file1 == null){
                if ($model->saveImageb($upload->uploadFile($file2, $model->imagea))  && $model->save(false)) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }elseif($file2 == null){
                if ($model->saveImagea($upload->uploadFile($file1, $model->imageb)) && $model->save(false)) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            } else{
                if ($model->saveImagea($upload->uploadFile($file1, $model->imagea)) && $model->saveImageb($upload->uploadFile($file2, $model->imageb)) && $model->save(false)) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }

            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Biotransprocess model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $upload = new ImageUpload();
        $oldImageaName = $model->imagea;
        $oldImagebName = $model->imageb;
        if ($model->load(Yii::$app->request->post())) {
            $filea = UploadedFile::getInstance($model, 'imagea');
            $fileb = UploadedFile::getInstance($model, 'imageb');
            if($filea == null && $fileb == null){
                $model->imagea = $oldImageaName;
                $model->imageb = $oldImagebName;
                $model->save();
            }elseif ($filea == null ){
                $model->imagea = $oldImageaName;
                if ($model->saveImageb($upload->uploadFile($fileb, $model->imageb)) && $model->save(false)) {

                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }elseif ($fileb == null ){
                $model->imageb = $oldImagebName;
                if ($model->saveImagea($upload->uploadFile($filea, $model->imagea)) && $model->save(false)) {

                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }else{
                if ($model->saveImagea($upload->uploadFile($filea, $model->imagea)) && $model->saveImageb($upload->uploadFile($fileb, $model->imageb)) && $model->save(false)) {

                    return $this->redirect(['view', 'id' => $model->id]);
                }

            }
            return $this->redirect(['view', 'id' => $model->id]);

        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Biotransprocess model.
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
     * Finds the Biotransprocess model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Biotransprocess the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Biotransprocess::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
