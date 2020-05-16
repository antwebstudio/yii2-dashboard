<?php

namespace ant\dashboard\migrations\db;

use ant\db\Migration;
use yii\db\Schema;

/**
 * Class M200516032452CreateDashboardPanel
 */
class M200516032452CreateDashboardPanel extends Migration
{
	protected $tableName = '{{%dashboard_panel}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->createTable($this->tableName, [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'panel_class' => Schema::TYPE_STRING . ' NOT NULL',
            'options' => Schema::TYPE_TEXT,
            'dashboard_id' => $this->foreignId(),
            'region' => Schema::TYPE_STRING . ' NOT NULL',
            'sort' => Schema::TYPE_INTEGER . ' NOT NULL',
            'enabled' => Schema::TYPE_INTEGER . '(1) DEFAULT 0 NOT NULL',
        ], $this->getTableOptions());
        
		$this->addForeignKey('fk_dashboard_panel_dashboard_id', $this->tableName, ['dashboard_id'], '{{%dashboard}}', 'id', 'CASCADE');
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
        echo "M200516032452CreateDashboardPanel cannot be reverted.\n";

        return false;
    }
    */
}
