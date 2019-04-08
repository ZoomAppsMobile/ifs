<?php

use yii\db\Migration;

/**
 * Class m180908_144524_create_table_menu_three
 */
class m180908_144524_create_table_menu_three extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%menu}}', [
            'id' => $this->primaryKey(),
            'keywords' => $this->string(),
            'descripsion' => $this->text(),
            'keywords' => $this->string()->null(),
            'name' => $this->string()->notNull(),
            'text' => $this->text()->notNull(),
            'url' => $this->string()->notNull(),
            'top' => $this->integer()->notNull(),
            'middle' => $this->integer()->notNull(),
            'footer' => $this->integer()->notNull(),
            'sort_top' => $this->integer()->null(),
            'sort_middle' => $this->integer()->null(),
            'sort_footer' => $this->integer()->null(),
            'status' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%menu}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180908_144524_create_table_menu_three cannot be reverted.\n";

        return false;
    }
    */
}
