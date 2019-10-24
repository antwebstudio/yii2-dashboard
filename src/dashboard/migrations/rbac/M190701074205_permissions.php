<?php

namespace ant\dashboard\migrations\rbac;

use yii\db\Schema;
use ant\rbac\Migration;
use ant\rbac\Role;

class M190701074205_permissions extends Migration
{
	protected $permissions;
	
	public function init() {
		$this->permissions = [
			\ant\dashboard\controllers\DefaultController::class => [
				'index' => ['Access dashboard', [Role::ROLE_ADMIN]],
			],
			\cornernote\dashboard\controllers\DashboardController::class => [
				'index' => ['Access dashboard', [Role::ROLE_ADMIN]],
				'create' => ['Create dashboard', [Role::ROLE_ADMIN]],
				'update' => ['Update dashboard', [Role::ROLE_ADMIN]],
				'view' => ['View dashboard', [Role::ROLE_ADMIN]],
				'delete' => ['Delete dashboard', [Role::ROLE_ADMIN]],
			],
			\cornernote\dashboard\controllers\DashboardPanelController::class => [
				//'index' => ['Access dashboard', [Role::ROLE_ADMIN]],
				'create' => ['Create dashboard Panel', [Role::ROLE_ADMIN]],
				'update' => ['Update dashboard Panel', [Role::ROLE_ADMIN]],
				'delete' => ['Delete dashboard Panel', [Role::ROLE_ADMIN]],
				//'view' => ['View dashboard', [Role::ROLE_ADMIN]],
			],
		];
		
		parent::init();
	}
	
	public function up()
    {
		$this->addAllPermissions($this->permissions);
    }

    public function down()
    {
		$this->removeAllPermissions($this->permissions);
    }
}
