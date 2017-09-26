<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\sopir;

/**
 * sopirSearch represents the model behind the search form of `app\models\sopir`.
 */
class sopirSearch extends sopir
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_sopir'], 'integer'],
            [['nama_sopir', 'alamat_sopir', 'telp_sopir', 'no_ktp', 'jns_SIM', 'no_SIM', 'tgl_berlaku_SIM', 'stat', 'ket', 'created_at', 'updated_at'], 'safe'],
            [['persentase'], 'number'],
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
        $query = sopir::find();

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
            'id_sopir' => $this->id_sopir,
            'tgl_berlaku_SIM' => $this->tgl_berlaku_SIM,
            'persentase' => $this->persentase,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'nama_sopir', $this->nama_sopir])
            ->andFilterWhere(['like', 'alamat_sopir', $this->alamat_sopir])
            ->andFilterWhere(['like', 'telp_sopir', $this->telp_sopir])
            ->andFilterWhere(['like', 'no_ktp', $this->no_ktp])
            ->andFilterWhere(['like', 'jns_SIM', $this->jns_SIM])
            ->andFilterWhere(['like', 'no_SIM', $this->no_SIM])
            ->andFilterWhere(['like', 'stat', $this->stat])
            ->andFilterWhere(['like', 'ket', $this->ket]);

        return $dataProvider;
    }
}
