<?php

use yii\db\Migration;
use Faker\Factory;

class m170926_045527_create_tb_m_sopir extends Migration
{
        const TABLE_NAME = 'tb_m_sopir';
    public function safeUp()
    {
        $this->createTable(self::TABLE_NAME, [
            'id_sopir' => $this->primaryKey(),   
            'nama_sopir' => $this->string(50)->notNull(),
            'alamat_sopir' => $this->text()->notNull(),
            'telp_sopir' => $this->string(50)->notNull(),
            'no_ktp' => $this->string(50)->notNull(),
            'jns_SIM' =>"Enum('A','B1','B2','C') NOT NULL " ,
            'no_SIM' => $this->string(50)->notNull(),
            'tgl_berlaku_SIM' => $this->date()->notNull(),
            'stat' =>"Enum('Aktif','Tidak Aktif') NOT NULL " ,
            'persentase' => $this->money()->notNull(),
            
            
            
            
            
            'ket' => $this->text(),
            'created_at'=>$this->datetime(),
            'updated_at'=>$this->datetime(),
            
        ]);
     $row=1000;
    $iterate=1;
    $start = microtime(true);
    $faker = Factory::create();
    $datas = [];
    for($j=1;$j<=$iterate;$j++){
        for($i=1;$i<=$row;$i++){                                     
            $datas[$i]=[$faker->name,$faker->address,$faker->phoneNumber,$faker->creditCardNumber,'A',$faker->bankAccountNumber,$faker->dateTimeThisCentury->format('Y-m-d')
                    ,'Aktif',rand(0,100),$faker->word,$faker->dateTimeThisCentury->format('Y-m-d'),$faker->dateTimeThisCentury->format('Y-m-d')
                    ];
        }   
        $this->batchInsert(self::TABLE_NAME, [ 
            'nama_sopir' ,
            'alamat_sopir' ,
            'telp_sopir',
            'no_ktp'  ,
            'jns_SIM',
            'no_SIM' ,
            'tgl_berlaku_SIM',
            'stat' ,
            'persentase' ,
   
            'ket',
            'created_at',
            'updated_at'], $datas);
    }   
     
    $time_elapsed_us = microtime(true) - $start;
    echo ($row*$iterate).' = '.$time_elapsed_us.' <br>';

        
        
    }
    public function safeDown()
    {
         $this->dropTable(self::TABLE_NAME); 
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170926_045527_create_tb_m_sopir cannot be reverted.\n";

        return false;
    }
    */
}
