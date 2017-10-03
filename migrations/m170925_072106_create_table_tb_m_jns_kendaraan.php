<?php

use yii\db\Migration;
use Faker\Factory;

class m170925_072106_create_table_tb_m_jns_kendaraan extends Migration
{
     const TABLE_NAME = 'tb_m_jns_kendaraan';
    public function safeUp()
    {
        $this->createTable(self::TABLE_NAME, [
            'id_jns_kendaraan' => $this->primaryKey(),   
            'nama_jns_kendaraan' => $this->string(50)->notNull(),
            'ket' => $this->text(),
            'created_at'=>$this->datetime(),
            'updated_at'=>$this->datetime(),
            
        ]);
        
                $row=25;
    $iterate=1;
    $start = microtime(true);
    $faker = Factory::create();
    $datas = [];


    for($j=1;$j<=$iterate;$j++){
        for($i=1;$i<=$row;$i++){    
            
            $datas[$i]=[
                     $faker->words(2,true),'',$faker->dateTimeThisCentury->format('Y-m-d'),$faker->dateTimeThisCentury->format('Y-m-d')
                    
                         
                    ];
        }   
        $this->batchInsert(self::TABLE_NAME, [ 
                 
            'nama_jns_kendaraan'  ,
            'ket' ,
            'created_at',
            'updated_at',], $datas);
          $time_elapsed_us = microtime(true) - $start;
    echo ($row*$iterate).' = '.$time_elapsed_us.' <br>';
    

    }
    
    }

    public function safeDown()
    {
        $this->dropTable(self::TABLE_NAME);
        
       // echo "m170925_013736_create_table_tb_m_jns_kendaraan cannot be reverted.\n";

       // return false;
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170925_072106_create_table_tb_m_jns_kendaraan cannot be reverted.\n";

        return false;
    }
    */
}
