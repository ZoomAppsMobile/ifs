<?php

use yii\db\Migration;

/**
 * Class m180908_143745_create_table_slider_one
 */
class m180908_143745_create_table_slider_one extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%slider}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'text' => $this->text()->notNull(),
            'url' => $this->string()->notNull(),
            'image' => $this->text()->null(),
            'category_id' => $this->integer()->null(),
            'status' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%slider}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180908_143745_create_table_slider_one cannot be reverted.\n";

        return false;
    }
    */
}
