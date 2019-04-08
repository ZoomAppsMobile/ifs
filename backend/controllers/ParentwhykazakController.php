<?php

namespace backend\controllers;

use common\models\ParentImageUpload;
use Yii;
use common\models\Parentwhykazak;
use backend\models\search\ParentwhykazakSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
class ParentwhykazakController extends BackendController
{
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

    public function actionIndex()
    {
        $searchModel = new ParentwhykazakSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Parentwhykazak();
        $upload = new ParentImageUpload();

        if ($model->load(Yii::$app->request->post())) {
            $model->country_id = Yii::$app->session['country'];
            $model->language_id = Yii::$app->session['lang'];
            $file = UploadedFile::getInstance($model, 'image');
            if($file == null){
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }else{
                $model->image = $upload->uploadFile($file);
                if ($model->save(false)) {
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }

        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {

        $model = $this->findModel($id);
        $upload = new ParentImageUpload();
        $oldImageName = $model->image;
        if ($model->load(Yii::$app->request->post())) {
            $file = UploadedFile::getInstance($model, 'image');

            if($file == null){
                $model->image = $oldImageName;
            }else{
                $model->image = $upload->uploadFile($file);
            }
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id, $menu_id)
    {

        $this->findModel($id)->delete();
        return $this->redirect(['update', 'id' => $menu_id]);
    }

    protected function findModel($id)
    {
        if (($model = Parentwhykazak::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
