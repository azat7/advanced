<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m180316_202352_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }
}
