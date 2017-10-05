<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\paket;

/**
 * paketSearch represents the model behind the search form of `app\models\paket`.
 */
class paketSearch extends paket
{
        public $nama_jns_kendaraan;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_paket', 'id_jns_kendaraan'], 'integer'],
            [['kode_paket', 'nama_paket','nama_jns_kendaraan', 'jenis_paket', 'jenis_biaya', 'stat', 'ket', 'created_at', 'updated_at'], 'safe'],
            [['biaya_rp', 'denda_rp'], 'number'],
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
        $query = paket::find()->leftJoin('tb_m_jns_kendaraan','tb_m_jns_kendaraan.id_jns_kendaraan=tb_m_paket.id_jns_kendaraan');

        // add conditions that shoul;

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
            'id_paket' => $this->id_paket,
            'id_jns_kendaraan' => $this->id_jns_kendaraan,
            'biaya_rp' => $this->biaya_rp,
            'denda_rp' => $this->denda_rp,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'kode_paket', $this->kode_paket])
            ->andFilterWhere(['like', 'nama_paket', $this->nama_paket])
            ->andFilterWhere(['like', 'jenis_paket', $this->jenis_paket])
            ->andFilterWhere(['like', 'jenis_biaya', $this->jenis_biaya])
                
           ->andFilterWhere(['like', 'nama_jns_kendaraan', $this->nama_jns_kendaraan])
            ->andFilterWhere(['like', 'stat', $this->stat])
            ->andFilterWhere(['like', 'ket', $this->ket]);

        return $dataProvider;
    }
}
