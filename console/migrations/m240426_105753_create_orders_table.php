<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%orders}}`.
 */
class m240426_105753_create_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%orders}}', [
            'id' => $this->primaryKey(),
            'total_price'=>$this->decimal(10,2)->notNull(),
            'status'=>$this->tinyInteger(1)->notNull(),
            'firstname'=>$this->string(255)->notNull(),
            'lastname'=>$this->string(255)->notNull(),
            'email'=>$this->string(255)->notNull(),
            'created_at'=>$this->integer(11),
            'created_by'=>$this->integer(11)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%orders}}');
    }
}
