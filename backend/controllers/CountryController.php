<?php

namespace backend\controllers;

use common\models\Countrylang;
use common\models\Language;
use Yii;
use common\models\Country;
use backend\models\search\CountrySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
class CountryController extends BackendController
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
        $searchModel = new CountrySearch();
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
        $model = new Country();
        if ($model->load(Yii::$app->request->post()) && $model->save(false)) {
            $model->sort = $model->id;
            if($model->save(false)){

                $countryLang = new Countrylang();
                $countryLang->country_id = $model->id;
                $countryLang->language_id = 1;
                $countryLang->status = $model->status;
                $countryLang->sort = 1;
                if($countryLang->save(false)){
                    Countrylang::createLanguageContent($model->id, 1);
                    Yii::$app->session->set('country',$model->id);
                    Yii::$app->session->set('lang',1);
                }
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $model = Country::findOne($id);
        $models = Country::find()->where('sort > '.$model->sort)->all();

        foreach($models as $v){
            $v->sort--;
            $v->save(false);
        }

        Countrylang::deleteAll('country_id='.$id);
        Countrylang::deleteCountryContent($model->id);

        if($this->findModel($id)->delete()){
            Yii::$app->session->set('country',1);
            Yii::$app->session->set('lang',1);
        }
        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Country::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionMoveUp($id)
    {
        $model = Country::findOne($id);
        if ($model->sort != 1) {
            $sort = $model->sort - 1;
            $model_down = Country::find()->where("sort = $sort")->one();
            $model_down->sort += 1;
            $model_down->save(false);

            $model->sort -= 1;
            $model->save(false);
        }
        $this->redirect(['index']);
    }

    public function actionMoveDown($id)
    {
        $model = Country::findOne($id);
        $model_max_sort = Country::find()->orderBy("sort DESC")->one();

        if ($model->id != $model_max_sort->id) {
            $sort = $model->sort + 1;
            $model_up = Country::find()->where("sort = $sort")->one();
            $model_up->sort -= 1;
            $model_up->save(false);

            $model->sort += 1;
            $model->save(false);
        }
        $this->redirect(['index']);
    }
}
