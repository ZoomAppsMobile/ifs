<?php

namespace backend\controllers;

use common\models\DonationImageUpload;
use Yii;
use common\models\Donationprogramtype;
use backend\models\search\DonationprogramtypeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
class DonationprogramtypeController extends BackendController
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
        $searchModel = new DonationprogramtypeSearch();
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
        $model = new Donationprogramtype();
        $upload = new DonationImageUpload();

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
        $upload = new DonationImageUpload();
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
        $model = Donationprogramtype::findOne($id);
        $models = Donationprogramtype::find()->where('sort > '.$model->sort)->all();

        foreach($models as $v){
            $v->sort--;
            $v->save(false);
        }

        $this->findModel($id)->delete();
        return $this->redirect(['update', 'id' => $menu_id]);
    }

    protected function findModel($id)
    {
        if (($model = Donationprogramtype::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
