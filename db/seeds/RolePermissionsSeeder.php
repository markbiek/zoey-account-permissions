<?php

use Phinx\Seed\AbstractSeed;

class RolePermissionsSeeder extends AbstractSeed {
	/**
	 * Run Method.
	 *
	 * Write your database seeder using this method.
	 *
	 * More information on writing seeders is available here:
	 * https://book.cakephp.org/phinx/0/en/seeding.html
	 */
	public function run() {
		$row = $this->fetchRow('SELECT COUNT(*) as cnt FROM role_permissions');
		if ($row['cnt'] > 0) {
			echo 'The role_permissions table already has data.';
			return;
		}

		$data = [
			['role_id' => 1, 'permission_id' => 1],
			['role_id' => 2, 'permission_id' => 2],
			['role_id' => 3, 'permission_id' => 3],
		];

		$roles = $this->table('role_permissions');
		$roles->insert($data)->saveData();
	}
}
