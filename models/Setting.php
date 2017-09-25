<?php

namespace app\models;

use Yii;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;


/**
 * This is the model class for table "tb_m_setting".
 *
 * @property int $id_setting
 * @property string $nama_perusahaan
 * @property string $alamat_perusahaan
 * @property string $logo_perusahaan
 * @property string $ket
 * @property string $created_at
 * @property string $updated_at
 */
class Setting extends \yii\db\ActiveRecord
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
        return 'tb_m_setting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alamat_perusahaan', 'ket'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama_perusahaan', 'logo_perusahaan'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_setting' => Yii::t('app', 'Id Setting'),
            'nama_perusahaan' => Yii::t('app', 'Nama Perusahaan'),
            'alamat_perusahaan' => Yii::t('app', 'Alamat Perusahaan'),
            'logo_perusahaan' => Yii::t('app', 'Logo Perusahaan'),
            'ket' => Yii::t('app', 'Ket'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
