<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Donationprogramcon;

class DonationprogramconSearch extends Donationprogramcon
{
    public function rules()
    {
        return [
            [['id', 'country_id', 'language_id'], 'integer'],
            [['content'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Donationprogramcon::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'country_id' => $this->country_id,
            'language_id' => $this->language_id,
        ]);

        $query->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
