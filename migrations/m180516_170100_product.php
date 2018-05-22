<?php

use yii\db\Migration;

/**
 * Class m180516_170100_product
 */
class m180516_170100_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', array (
            'id' => $this->primaryKey(),
            'name' => $this->string(20)->notNull(),
			'count' => $this->integer()->notNull(),
            'trademark' => $this->string(20),
			'barcodeno' => $this->integer(),
			'price' => $this->integer(),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
           $this->dropTable('product');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180516_170100_product cannot be reverted.\n";

        return false;
    }
    */
}
