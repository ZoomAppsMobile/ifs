<?php

use yii\db\Migration;

/**
 * Class m180908_144220_create_table_partners_one
 */
class m180908_144220_create_table_partners_one extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%partners}}', [
            'id' => $this->primaryKey(),
            'keywords' => $this->string(),
            'descripsion' => $this->text(),
            'keywords' => $this->string()->null(),
            'name' => $this->string()->notNull(),
            'text' => $this->text()->notNull(),
            'image' => $this->text()->null(),
            'url' => $this->string()->notNull(),
            'status' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%partners}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180908_144220_create_table_partners_one cannot be reverted.\n";

        return false;
    }
    */
}
