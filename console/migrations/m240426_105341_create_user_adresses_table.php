<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_adresses}}`.
 */
class m240426_105341_create_user_adresses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_addresses}}', [
            'id' => $this->primaryKey(),
            'user_id'=>$this->integer(11)->notNull(),
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
        $this->dropTable('{{%user_addresses}}');
    }
}
