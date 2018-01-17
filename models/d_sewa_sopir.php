<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\behaviors\AttributeBehavior;
use Yii;






/**
 * This is the model class for table "tb_dt_sewa_sopir".
 *
 * @property int $id_dt_sewa
 * @property int $id_sewa
 * @property int $id_sopir
 * @property int $id_paket
 * @property string $jenis_sewa
 * @property string $sub_tot
 *
 * 
 * @property TbMPaket $paket
 * @property TbMSopir $sopir
 */
class d_sewa_sopir extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public function behaviors()
    {
        return [
            [
                'class' => AttributeBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['jenis_sewa'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['jenis_sewa'],
                ],
                'value' => function ($event) {
                    return is_null($this->paket)?null: $this->paket->jenis_biaya;
                },
            ],
        ];
    }
   
  
    public static function tableName()
    {
        return 'tb_dt_sewa_sopir';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'id_sopir', 'id_paket', 'sub_tot'], 'required'],
            [['id_sopir', 'id_paket'], 'integer'],
            [['jenis_sewa'], 'string'],
            [['sub_tot'], 'number'],
            [['id_sewa','jenis_sewa'],'safe'],
            
            [['id_paket'], 'exist', 'skipOnError' => true, 'targetClass' => paket::className(), 'targetAttribute' => ['id_paket' => 'id_paket']],
            [['id_sopir'], 'exist', 'skipOnError' => true, 'targetClass' => sopir::className(), 'targetAttribute' => ['id_sopir' => 'id_sopir']],
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
            'id_sopir' => Yii::t('app', 'Id Sopir'),
            'id_paket' => Yii::t('app', 'Id Paket'),
            'jenis_sewa' => Yii::t('app', 'Jenis Sewa'),
            'sub_tot' => Yii::t('app', 'Sub Tot'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaket()
    {
        return $this->hasOne(paket::className(), ['id_paket' => 'id_paket']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSopir()
    {
        return $this->hasOne(sopir::className(), ['id_sopir' => 'id_sopir']);
    }
    
    public function getSewa()
    {
        return $this->hasOne(sewa::className(), ['id_sewa' => 'id_sewa']);
    }
    



}
