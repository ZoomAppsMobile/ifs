<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Mainslide;

/**
 * MainslideSearch represents the model behind the search form of `app\models\Mainslide`.
 */
class MainslideSearch extends Mainslide
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cssNumber'], 'integer'],
            [['littleTitle', 'bigTitle', 'slogan', 'content', 'image'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Mainslide::find()->where('country_id='.Yii::$app->session["country"].' AND language_id='.Yii::$app->session["lang"]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'cssNumber' => $this->cssNumber,
        ]);

        $query->andFilterWhere(['like', 'littleTitle', $this->littleTitle])
            ->andFilterWhere(['like', 'bigTitle', $this->bigTitle])
            ->andFilterWhere(['like', 'slogan', $this->slogan])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
