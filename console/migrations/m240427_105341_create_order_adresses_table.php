<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_adresses}}`.
 */
class m240427_105341_create_order_adresses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_addresses}}', [
            'id' => $this->primaryKey(),
            'order_id'=>$this->integer(11)->notNull(),
            'address'=>$this->string(255)->notNull(),
            'city'=>$this->string(255)->notNull(),
            'state'=>$this->string(255)->notNull(),
            'country'=>$this->string(255)->notNull(),
            'zipcode'=>$this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order_addresses}}');
    }
}
