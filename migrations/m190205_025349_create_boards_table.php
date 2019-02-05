<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%boards}}`.
 */
class m190205_025349_create_boards_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%boards}}', [
            'id' => $this->primaryKey(),
            'white_user' => $this->integer()->notNull(),
            'black_user' => $this->integer()->notNull(),
            'turn' => $this->string()
        ]);
        $this->createIndex(
            'idx-boards-white_user',
            'boards',
            'white_user'
        );
        $this->addForeignKey(
            'fk-boards-white_user',
            'boards',
            'white_user',
            'users',
            'id',
            'cascade'
        );
        $this->createIndex(
            'idx-boards-black_user',
            'boards',
            'black_user'
        );
        $this->addForeignKey(
            'fk-boards-black_user',
            'boards',
            'black_user',
            'users',
            'id',
            'cascade'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%boards}}');
    }
}
