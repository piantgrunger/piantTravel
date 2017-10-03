<?php

use yii\db\Migration;
use Faker\Factory;

class m171003_091447_create_tb_m_customer extends Migration
{
      const TABLE_NAME = 'tb_m_customer';
    public function safeUp()
    {
        $this->createTable(self::TABLE_NAME, [
            'id_customer' => $this->primaryKey(),   
           'kode_customer' => $this->string(50)->notnull()->unique(),   
             
            'nama_customer' => $this->string(50)->notNull(),
            'alamat_customer' => $this->text()->notNull(),
            'telp_customer' => $this->string(50)->notNull(),
            'telp2_customer' => $this->string(50),
            'no_ktp'=> $this->string(50)->notNull(),
            
            'email_customer' => $this->string(50)->notNull(),
            'stat' =>"Enum('Aktif','Tidak Aktif') NOT NULL " ,
            
            
            
            
            'ket' => $this->text(),
            'created_at'=>$this->datetime(),
            'updated_at'=>$this->datetime(),
            
        ]);
     $row=5000;
    $iterate=1;
    $start = microtime(true);
    $faker = Factory::create();
    $datas = [];
    for($j=1;$j<=$iterate;$j++){
        for($i=1;$i<=$row;$i++){                                     
            $datas[$i]=['Cust-'.str_pad($i,5 ,'0',STR_PAD_LEFT), $faker->name,$faker->address,$faker->phoneNumber,$faker->phoneNumber,$faker->creditCardNumber,$faker->email
                    ,'Aktif',$faker->word(100),$faker->dateTimeThisCentury->format('Y-m-d'),$faker->dateTimeThisCentury->format('Y-m-d')
                    ];
        }   
        $this->batchInsert(self::TABLE_NAME, [ 
            'kode_customer',
            'nama_customer' ,
            'alamat_customer' ,
            'telp_customer',
                  'telp2_customer',
            'no_ktp',
             'email_customer',
            'stat'  ,
      
            'ket' ,
            'created_at',
            'updated_at',], $datas);
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
        echo "m170926_045527_create_tb_m_customer cannot be reverted.\n";

        return false;
    }
    */
}
