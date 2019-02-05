<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pieces}}`.
 */
class m190205_030701_create_pieces_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pieces}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(8)->notNull(),
            'row' => $this->integer()->notNull(),
            'column' => $this->char(1)->notNull(),
            'eaten' => $this->boolean()->notNull(),
            'color' => $this->string()->notNull(),
            'board_id' => $this->integer()->notNull()
        ]);
        $this->createIndex(
          'idx-pieces-board_id',
          'pieces',
          'board_id'
        );
        $this->addForeignKey(
            'fk-pieces-board_id',
            'pieces',
            'board_id',
            'boards',
            'id',
            'cascade'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pieces}}');
    }
}
