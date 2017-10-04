<?php

use yii\db\Migration;
use app\models\jnskendaraan;
use Faker\Factory;
use yii\helpers\ArrayHelper;
/**
 * Handles the creation of table `tb_m_paket`.
 */
class m171004_073146_create_tb_m_paket_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tb_m_paket', [
            'id_paket' => $this->primaryKey(),
            'kode_paket' => $this->string()->unique()->notNull(),
            'nama_paket' => $this->string()->notNull(),
            'jenis_paket' => "Enum('Paket Sopir','Paket Kendaraan') NOT NULL " ,
            'id_jns_kendaraan' => $this->integer(),
            'jenis_biaya' => "Enum('Harian','Total') NOT NULL " ,
            'biaya_rp' => $this->money(19,2),
            'denda_rp' => $this->money(19,2),
            'stat' =>"Enum('Aktif','Tidak Aktif') NOT NULL " ,
            
            
            
               'ket' => $this->text(),
            'created_at'=>$this->datetime(),
            'updated_at'=>$this->datetime(),

            
        ]);
        
          $this->addForeignKey(
            'fk-tb_m_paket-id_jns_kendaraan',
            'tb_m_paket',
            'id_jns_kendaraan',
            'tb_m_jns_kendaraan',
            'id_jns_kendaraan',
            'RESTRICT',
            'CASCADE'    
        );
          
          
                
          $row=20;
    $iterate=1;
    $start = microtime(true);
    $faker = Factory::create();
    $datas = [];
    $array = jnskendaraan::find()->select('id_jns_kendaraan')->asArray()->all();
    
   $id = ArrayHelper::getColumn($array, 'id_jns_kendaraan');


    for($j=1;$j<=$iterate;$j++){
        for($i=1;$i<=$row;$i++){    
            
            $datas[$i]=[$faker->randomElement($id),
                'Paket-'.str_pad($i,5 ,'0',STR_PAD_LEFT)
                    ,'Paket '.$faker->word,
               'Paket Kendaraan',
               $faker->randomElement(['Harian','Total']),
                    $faker->randomFloat(),$faker->randomFloat()
                    ,'Aktif','',$faker->dateTimeThisCentury->format('Y-m-d'),$faker->dateTimeThisCentury->format('Y-m-d')
                    
                         
                    ];
        }   
        $this->batchInsert('tb_m_paket', [ 
                        'id_jns_kendaraan' ,   
            'kode_paket',
            'nama_paket' ,
            'jenis_paket' ,

            'jenis_biaya' ,
            'biaya_rp' ,
            'denda_rp',
            'stat',
            
            
            
               'ket'  ,
            'created_at',
            'updated_at' ,], $datas);
          $time_elapsed_us = microtime(true) - $start;
    echo ($row*$iterate).' = '.$time_elapsed_us.' <br>';

   
    }  
     
          
        
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tb_m_paket');
    }
}
