<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Parentlaw;

class ParentlawSearch extends Parentlaw
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['contenta', 'contentb'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Parentlaw::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"]);

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

        $query->andFilterWhere(['like', 'contenta', $this->contenta])
            ->andFilterWhere(['like', 'contentb', $this->contentb]);

        return $dataProvider;
    }
}
