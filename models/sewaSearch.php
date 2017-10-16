<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\sewa;

/**
 * sewaSearch represents the model behind the search form of `app\models\sewa`.
 */
class sewaSearch extends sewa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_sewa', 'id_customer'], 'integer'],
            [['no_sewa', 'tgl_pemesanan', 'tgl_sewa', 'jam_sewa', 'tgl_pengembalian', 'jam_pengembalian', 'jaminan', 'ket_jaminan', 'ket', 'created_at', 'updated_at'], 'safe'],
            [['DP_rp', 'total_sewa_kendaraan', 'total_sewa_sopir', 'total'], 'number'],
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
        $query = sewa::find();

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
            'id_sewa' => $this->id_sewa,
            'tgl_pemesanan' => $this->tgl_pemesanan,
            'tgl_sewa' => $this->tgl_sewa,
            'jam_sewa' => $this->jam_sewa,
            'id_customer' => $this->id_customer,
            'tgl_pengembalian' => $this->tgl_pengembalian,
            'jam_pengembalian' => $this->jam_pengembalian,
            'DP_rp' => $this->DP_rp,
            'total_sewa_kendaraan' => $this->total_sewa_kendaraan,
            'total_sewa_sopir' => $this->total_sewa_sopir,
            'total' => $this->total,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'no_sewa', $this->no_sewa])
            ->andFilterWhere(['like', 'jaminan', $this->jaminan])
            ->andFilterWhere(['like', 'ket_jaminan', $this->ket_jaminan])
            ->andFilterWhere(['like', 'ket', $this->ket]);

        return $dataProvider;
    }
}
