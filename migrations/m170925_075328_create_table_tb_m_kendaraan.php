<?php

use yii\db\Migration;
use Faker\Factory;
use app\models\jnskendaraan;
use yii\helpers\ArrayHelper;

class  m170925_075328_create_table_tb_m_kendaraan extends Migration
{
     const TABLE_NAME = 'tb_m_kendaraan';
    public function safeUp()
    {
        $this->createTable(self::TABLE_NAME, [
            'id_kendaraan' => $this->primaryKey(),   
            'id_jns_kendaraan' => $this->integer()->notNull(),
            'no_plat_kendaraan' => $this->string(50)->notNull(),
            'no_rangka_kendaraan' => $this->string(50)->notNull(),
            'no_mesin_kendaraan' => $this->string(50)->notNull(),
            'tahun_pembuatan' => $this->integer()->notNull(),
            'merk_kendaraan' => $this->string(50)->notNull(),
            'pabrikan_kendaraan' => $this->string(50)->notNull(),
            'pemilik_kendaraan' => $this->string(50)->notNull(),
            'kapasitas_penumpang' => $this->string(50)->notNull(),
            'status' => $this->string(10)->notNull(),
            
            'ket' => $this->text(),
            'created_at'=>$this->datetime(),
            'updated_at'=>$this->datetime(),
            
        ]);
    
        $this->addForeignKey(
            'fk-tb_m_kendaraan-id_jns_kendaraan',
            'tb_m_kendaraan',
            'id_jns_kendaraan',
            'tb_m_jns_kendaraan',
            'id_jns_kendaraan',
            'RESTRICT',
            'CASCADE'    
        );
        
          $row=10000;
    $iterate=1;
    $start = microtime(true);
    $faker = Factory::create();
    $datas = [];
    $array = jnskendaraan::find()->select('id_jns_kendaraan')->asArray()->all();
    
   $id = ArrayHelper::getColumn($array, 'id_jns_kendaraan');

    for($j=1;$j<=$iterate;$j++){
        for($i=1;$i<=$row;$i++){    
            
            $datas[$i]=[$faker->randomElement($id),$faker->randomLetter." ".$faker->randomNumber(4)." ".$faker->randomLetter(2)
                    ,$faker->creditCardNumber,
                $faker->bankAccountNumber,
                $faker->dateTimeThisDecade->format('Y'),
                     $faker->words(3,true),$faker->randomElement(['Honda','Toyota','Suzuki','Ferrari','Opel','VW','Mazda','Karimun']),$faker->name, rand(2,12),'Ready','',$faker->dateTimeThisCentury->format('Y-m-d'),$faker->dateTimeThisCentury->format('Y-m-d')
                    
                         
                    ];
        }   
        $this->batchInsert(self::TABLE_NAME, [ 
               'id_jns_kendaraan',
            'no_plat_kendaraan' ,
            'no_rangka_kendaraan' ,
            'no_mesin_kendaraan' ,
            'tahun_pembuatan',
            'merk_kendaraan' ,
            'pabrikan_kendaraan' ,
            'pemilik_kendaraan' ,
            'kapasitas_penumpang' ,
            'status' ,
            
            'ket',
            'created_at',
            'updated_at',], $datas);
          $time_elapsed_us = microtime(true) - $start;
    echo ($row*$iterate).' = '.$time_elapsed_us.' <br>';

   
    }  
     

    }
    
     

    public function safeDown()
    {
        $this->dropTable(self::TABLE_NAME);
        
       // echo "m170925_013736_create_table_tb_m_kendaraan cannot be reverted.\n";

       // return false;
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170925_072106_create_table_tb_m_kendaraan cannot be reverted.\n";

        return false;
    }
    */
}
