<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblCoordinate;

/**
 * TblCoordinateCrud represents the model behind the search form about `app\models\TblCoordinate`.
 */
class TblCoordinateCrud extends TblCoordinate
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'speed', 'accuracy'], 'integer'],
            [['lastupdate', 'phone', 'session'], 'safe'],
            [['latitude', 'longitude', 'distance'], 'number'],
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
        $query = TblCoordinate::find();

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
            'id' => $this->id,
            'lastupdate' => $this->lastupdate,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'speed' => $this->speed,
            'distance' => $this->distance,
            'accuracy' => $this->accuracy,
        ]);

        $query->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'session', $this->session]);

        return $dataProvider;
    }
}
