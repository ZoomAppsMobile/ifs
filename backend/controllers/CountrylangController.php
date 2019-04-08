<?php

namespace backend\controllers;

use common\models\Country;
use Yii;
use common\models\Countrylang;
use backend\models\search\CountrylangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
class CountrylangController extends BackendController
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
        $searchModel = new CountrylangSearch();
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
        $model = new Countrylang();

        if ($model->load(Yii::$app->request->post())) {

            if($model->country_id == 0){
                $check = Countrylang::find()->where('language_id='.$model->language_id)->all();
                $country = "";
                foreach ($check as $v) {
                    $country.=$v->countryName.",";
                }
                $country = substr($country,0,strlen($country)-1);

                if($check == null){
                    $countries = Country::find()->all();
                    $language_id = $model->language_id;
                    $status = $model->status;
                    foreach ($countries as $v){
                        $model = new Countrylang();
                        $lastlang = Countrylang::find()->where('country_id='.$v->id)->limit(1)->orderBy('sort DESC')->one();
                        $model->country_id = $v->id;
                        $model->language_id = $language_id;
                        $model->status = $status;
                        if($lastlang == null){
                            $model->sort = 1;
                        }else{
                            $model->sort = $lastlang->sort+1;
                        }
                        if($model->save()){
                            Countrylang::createLanguageContent($v->id,$model->language_id);
                        }
                    }
                    return $this->redirect(['index']);
                }else{
                    Yii::$app->getSession()->setFlash('language', 'Язык '.$model->langName.' уже существует в старанах '.$country.'!');
                    return $this->render('create', [
                        'model' => $model,
                    ]);
                }

            }else{
                $check = Countrylang::find()->where('country_id='.$model->country_id.' AND language_id='.$model->language_id)->one();
                if($check == null){
                    $lastlang = Countrylang::find()->where('country_id='.$model->country_id.' AND language_id='.$model->language_id)->limit(1)->orderBy('sort DESC')->one();
                    if($lastlang == null){
                        $model->sort = 1;
                    }else{
                        $model->sort = $lastlang->sort+1;
                    }
                    if($model->save()){
                        Yii::$app->session->set('country',$model->country_id);
                        Yii::$app->session->set('lang',$model->language_id);
                        Countrylang::createLanguageContent($model->country_id,$model->language_id);
                    }



                }else{
                    Yii::$app->getSession()->setFlash('language', 'Язык '.$model->langName.' уже существует в старане '.$model->countryName.'!');
                    return $this->render('create', [
                        'model' => $model,
                    ]);
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
        $model = Countrylang::findOne($id);
        $models = Countrylang::find()->where('sort > '.$model->sort)->all();

        foreach($models as $v){
            $v->sort--;
            $v->save(false);
        }

        Countrylang::deleteLanguageContent($model->country_id, $model->language_id);

        if($this->findModel($id)->delete()){
            Yii::$app->session->set('country',1);
            Yii::$app->session->set('lang',1);
        }
        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Countrylang::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionMoveUp($id)
    {
        $model = Countrylang::findOne($id);
        if ($model->sort != 1) {
            $sort = $model->sort - 1;
            $model_down = Countrylang::find()->where("sort = $sort")->one();
            $model_down->sort += 1;
            $model_down->save(false);

            $model->sort -= 1;
            $model->save(false);
        }
        $this->redirect(['index']);
    }

    public function actionMoveDown($id)
    {
        $model = Countrylang::findOne($id);
        $model_max_sort = Countrylang::find()->orderBy("sort DESC")->one();

        if ($model->id != $model_max_sort->id) {
            $sort = $model->sort + 1;
            $model_up = Countrylang::find()->where("sort = $sort")->one();
            $model_up->sort -= 1;
            $model_up->save(false);

            $model->sort += 1;
            $model->save(false);
        }
        $this->redirect(['index']);
    }
}
