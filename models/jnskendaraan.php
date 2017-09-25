<?php

namespace app\models;

use Yii;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\helpers\ArrayHelper;


/**
 * This is the model class for table "tb_m_jns_kendaraan".
 *
 * @property int $id_jns_kendaraan
 * @property string $nama_jns_kendaraan
 * @property string $ket
 * @property string $created_at
 * @property string $updated_at
 */
class jnskendaraan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */


    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // if you're using datetime instead of UNIX timestamp:
                 'value' => new Expression('NOW()'),
            ],
        ];
    }
    public static function tableName()
    {
        return 'tb_m_jns_kendaraan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_jns_kendaraan'], 'required'],
            [['nama_jns_kendaraan'], 'unique'],
            
            [['ket'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama_jns_kendaraan'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_jns_kendaraan' => Yii::t('app', 'Id Jns Kendaraan'),
            'nama_jns_kendaraan' => Yii::t('app', 'Nama Jns Kendaraan'),
            'ket' => Yii::t('app', 'Ket'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
      public function getDataBrowsejnskendaraan()
    {        
     return ArrayHelper::map(
                     jnskendaraan::find()
                                        ->select([
                                                'id_jns_kendaraan','ket_jnskendaraan' => 'nama_jns_kendaraan'
                                        ])
                                        ->asArray()
                                        ->all(), 'id_jns_kendaraan', 'ket_jnskendaraan');
    }

}
