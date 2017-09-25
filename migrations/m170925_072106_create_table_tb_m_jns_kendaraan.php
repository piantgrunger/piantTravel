<?php

use yii\db\Migration;

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
