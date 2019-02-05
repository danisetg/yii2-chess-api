<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m190204_204301_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'user_name' => $this->string(20)->notNull(),
            'email' => $this->string(50)->notNull(),
            'games_played' => $this->integer()->notNull(),
            'victories' => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
