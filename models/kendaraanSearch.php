<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\kendaraan;

/**
 * kendaraanSearch represents the model behind the search form of `app\models\kendaraan`.
 */
class kendaraanSearch extends kendaraan
{
    /**
     * @inheritdoc
     */
    public $nama_jns_kendaraan;
    
    public function rules()
    {
        return [
            [['id_kendaraan', 'id_jns_kendaraan', 'tahun_pembuatan'], 'integer'],
            [['no_plat_kendaraan', 'nama_jns_kendaraan', 'no_rangka_kendaraan', 'no_mesin_kendaraan', 'merk_kendaraan', 'pabrikan_kendaraan', 'pemilik_kendaraan', 'kapasitas_penumpang', 'status', 'ket', 'created_at', 'updated_at'], 'safe'],
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
        $query = kendaraan::find()->leftJoin('tb_m_jns_kendaraan','tb_m_jns_kendaraan.id_jns_kendaraan=tb_m_kendaraan.id_jns_kendaraan');

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
            'id_kendaraan' => $this->id_kendaraan,
            'id_jns_kendaraan' => $this->id_jns_kendaraan,
            'tahun_pembuatan' => $this->tahun_pembuatan,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'no_plat_kendaraan', $this->no_plat_kendaraan])
            ->andFilterWhere(['like', 'no_rangka_kendaraan', $this->no_rangka_kendaraan])
            ->andFilterWhere(['like', 'nama_jns_kendaraan', $this->nama_jns_kendaraan])
        
                ->andFilterWhere(['like', 'no_mesin_kendaraan', $this->no_mesin_kendaraan])
            ->andFilterWhere(['like', 'merk_kendaraan', $this->merk_kendaraan])
            ->andFilterWhere(['like', 'pabrikan_kendaraan', $this->pabrikan_kendaraan])
            ->andFilterWhere(['like', 'pemilik_kendaraan', $this->pemilik_kendaraan])
            ->andFilterWhere(['like', 'kapasitas_penumpang', $this->kapasitas_penumpang])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'ket', $this->ket]);

        return $dataProvider;
    }
}
