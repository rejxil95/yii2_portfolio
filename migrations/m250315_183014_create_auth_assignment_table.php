<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%auth_assignment}}`.
 */
class m250315_183014_create_auth_assignment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%auth_assignment}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%auth_assignment}}');
    }
}
