<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\jnskendaraan;

/**
 * jnskendaraanSearch represents the model behind the search form of `app\models\jnskendaraan`.
 */
class jnskendaraanSearch extends jnskendaraan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_jns_kendaraan'], 'integer'],
            [['nama_jns_kendaraan', 'ket', 'created_at', 'updated_at'], 'safe'],
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
        $query = jnskendaraan::find();

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
            'id_jns_kendaraan' => $this->id_jns_kendaraan,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'nama_jns_kendaraan', $this->nama_jns_kendaraan])
            ->andFilterWhere(['like', 'ket', $this->ket]);

        return $dataProvider;
    }
}
