<?php

namespace ant\dashboard\migrations\db;

use ant\db\Migration;
use yii\db\Schema;

/**
 * Class M200516032445CreateDashboard
 */
class M200516032445CreateDashboard extends Migration
{
	protected $tableName = '{{%dashboard}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->autoId(),
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'layout_class' => Schema::TYPE_STRING . ' NOT NULL',
            'sort' => Schema::TYPE_INTEGER . ' NOT NULL',
            'options' => Schema::TYPE_TEXT,
            'enabled' => Schema::TYPE_INTEGER . '(1) DEFAULT 0 NOT NULL',
        ], $this->getTableOptions());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "M200516032445CreateDashboard cannot be reverted.\n";

        return false;
    }
    */
}
