<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Parentdoctor;

class ParentdoctorSearch extends Parentdoctor
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'image', 'contenta', 'contentb'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Parentdoctor::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'contenta', $this->contenta])
            ->andFilterWhere(['like', 'contentb', $this->contentb]);

        return $dataProvider;
    }
}
