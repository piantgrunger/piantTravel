<?php

namespace app\models;

use Yii;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;


/**
 * This is the model class for table "tb_dt_sewa_kendaraan".
 *
 * @property int $id_dt_sewa
 * @property int $id_sewa
 * @property int $id_jns_kendaraan
 * @property int $id_kendaraan
 * @property int $id_paket
 * @property string $jenis_sewa
 * @property string $sub_tot
 *
 * @property TbMjnskendaraan $jnskendaraan
 * @property TbMKendaraan $kendaraan
 * @property TbMPaket $paket
 */
class d_sewa_kendaraan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */


   
    public static function tableName()
    {
        return 'tb_dt_sewa_kendaraan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_sewa', 'id_jns_kendaraan', 'id_kendaraan', 'id_paket', 'jenis_sewa', 'sub_tot'], 'required'],
            [['id_sewa', 'id_jns_kendaraan', 'id_kendaraan', 'id_paket'], 'integer'],
            [['jenis_sewa'], 'string'],
            [['sub_tot'], 'number'],
            [['id_jns_kendaraan'], 'exist', 'skipOnError' => true, 'targetClass' => jnskendaraan::className(), 'targetAttribute' => ['id_jns_kendaraan' => 'id_jns_kendaraan']],
            [['id_kendaraan'], 'exist', 'skipOnError' => true, 'targetClass' => kendaraan::className(), 'targetAttribute' => ['id_kendaraan' => 'id_kendaraan']],
            [['id_paket'], 'exist', 'skipOnError' => true, 'targetClass' => paket::className(), 'targetAttribute' => ['id_paket' => 'id_paket']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_dt_sewa' => Yii::t('app', 'Id Dt Sewa'),
            'id_sewa' => Yii::t('app', 'Id Sewa'),
            'id_jns_kendaraan' => Yii::t('app', 'Id Jns Kendaraan'),
            'id_kendaraan' => Yii::t('app', 'Id Kendaraan'),
            'id_paket' => Yii::t('app', 'Id Paket'),
            'jenis_sewa' => Yii::t('app', 'Jenis Sewa'),
            'sub_tot' => Yii::t('app', 'Sub Tot'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getjnskendaraan()
    {
        return $this->hasOne(jnskendaraan::className(), ['id_jns_kendaraan' => 'id_jns_kendaraan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKendaraan()
    {
        return $this->hasOne(kendaraan::className(), ['id_kendaraan' => 'id_kendaraan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaket()
    {
        return $this->hasOne(paket::className(), ['id_paket' => 'id_paket']);
        
        
    }
    
        public function getSewa()
    {
        return $this->hasOne(sewa::className(), ['id_sewa' => 'id_sewa']);
    }
}
