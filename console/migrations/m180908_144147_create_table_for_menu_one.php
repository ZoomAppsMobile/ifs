<?php

use yii\db\Migration;

/**
 * Class m180908_144147_create_table_for_menu_one
 */
class m180908_144147_create_table_for_menu_one extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%for_menu}}', [
            'id' => $this->primaryKey(),
            'menu_id' => $this->integer()->notNull(),
            'text' => $this->text()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%for_menu}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180908_144147_create_table_for_menu_one cannot be reverted.\n";

        return false;
    }
    */
}
