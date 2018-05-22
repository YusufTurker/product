<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m180426_105838_product
 */
class m180426_105838_product extends Migration
{
	public function safeUp()
    {
        $this->createTable('product', array(
            'id' => 'pk',
			'name' => 'string NOT NULL',
            'title' => 'string NOT NULL',
            'trademark' => 'text',
			'barcodeno' => 'int NOT NULL',
			'count' => 'int NOT NULL',
			'price' => 'int NOT NULL',
        ));
    }
 
    public function safeDown()
    {
        $this->dropTable('product');
    }
   /*public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('product', [
            'id' => $this->primaryKey()->int(11),
            'name' => $this->uniqueKey()->varchar(20)->notNull(),
			'count' => $this->int(11)->notNull(),
            'trademark' => $this->varchar(20),
			'price' => $this->int(11),
        ], $tableOptions);


    }

    public function down()
    {
        $this->dropTable('product');
    }*/
}
