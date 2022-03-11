<?php

use yii\db\Migration;

/**
 * Class m220311_151101_user_table_insert
 */
class m220311_151101_user_table_insert extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%user}}', [
            'id' => '100',
            'username' => 'admin',
            'password_hash' => Yii::$app->security->generatePasswordHash('100adminTEST'), //'100adminTEST'
            'auth_key' => 'test100key',
            'password_reset_token' => '100-token',
            'email' => 'admin@testchart.ru',
            'status' => '10',
            'created_at' => Yii::$app->formatter->asTimestamp(date('Y-d-m h:i:s')),
            'updated_at' => Yii::$app->formatter->asTimestamp(date('Y-d-m h:i:s')),
        ]);

        $this->insert('{{%user}}', [
            'id' => '101',
            'username' => 'demo',
            'password_hash' => Yii::$app->security->generatePasswordHash('demo'), //'demo'
            'auth_key' => 'test101key',
            'password_reset_token' => '101-token',
            'email' => 'demo@testchart.ru',
            'status' => '10',
            'created_at' => Yii::$app->formatter->asTimestamp(date('Y-d-m h:i:s')),
            'updated_at' => Yii::$app->formatter->asTimestamp(date('Y-d-m h:i:s')),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('{{%user}}', [
            'id' => '100',
        ]);

        $this->delete('{{%user}}', [
            'id' => '101',
        ]);
    }
}
