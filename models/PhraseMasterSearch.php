<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PhraseMaster;

/**
 * PhraseMasterSearch represents the model behind the search form about `app\models\PhraseMaster`.
 */
class PhraseMasterSearch extends PhraseMaster
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Phrase_ID', 'Language_ID', 'Surah_Number', 'Phrase_Number'], 'integer'],
            [['Phrase_Content'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = PhraseMaster::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Phrase_ID' => $this->Phrase_ID,
            'Language_ID' => $this->Language_ID,
            'Surah_Number' => $this->Surah_Number,
            'Phrase_Number' => $this->Phrase_Number,
        ]);

        $query->andFilterWhere(['like', 'Phrase_Content', $this->Phrase_Content]);

        return $dataProvider;
    }
}
