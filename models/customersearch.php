<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\customer;

/**
 * customersearch represents the model behind the search form of `app\models\customer`.
 */
class customersearch extends customer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_customer'], 'integer'],
            [['kode_customer', 'nama_customer', 'alamat_customer', 'telp_customer', 'telp2_customer', 'no_ktp', 'email_customer', 'stat', 'ket', 'created_at', 'updated_at'], 'safe'],
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
        $query = customer::find();

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
            'id_customer' => $this->id_customer,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'kode_customer', $this->kode_customer])
            ->andFilterWhere(['like', 'nama_customer', $this->nama_customer])
            ->andFilterWhere(['like', 'alamat_customer', $this->alamat_customer])
            ->andFilterWhere(['like', 'telp_customer', $this->telp_customer])
            ->andFilterWhere(['like', 'telp2_customer', $this->telp2_customer])
            ->andFilterWhere(['like', 'no_ktp', $this->no_ktp])
            ->andFilterWhere(['like', 'email_customer', $this->email_customer])
            ->andFilterWhere(['like', 'stat', $this->stat])
            ->andFilterWhere(['like', 'ket', $this->ket]);

        return $dataProvider;
    }
}
