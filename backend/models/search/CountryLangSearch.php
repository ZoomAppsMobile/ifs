<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Countrylang;

class CountrylangSearch extends Countrylang
{
    public function rules()
    {
        return [
            [['id', 'country_id', 'language_id', 'status', 'sort'], 'integer'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Countrylang::find();

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
            'status' => $this->status,
            'sort' => $this->sort,
        ]);

        $query->orderBy('sort ASC');

        return $dataProvider;
    }
}
