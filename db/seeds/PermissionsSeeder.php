<?php

use Phinx\Seed\AbstractSeed;

class PermissionsSeeder extends AbstractSeed {
	/**
	 * Run Method.
	 *
	 * Write your database seeder using this method.
	 *
	 * More information on writing seeders is available here:
	 * https://book.cakephp.org/phinx/0/en/seeding.html
	 */
	public function run() {
		$row = $this->fetchRow('SELECT COUNT(*) as cnt FROM permissions');
		if ($row['cnt'] > 0) {
			echo 'The permissions table already has data.';
			return;
		}

		$data = [
			['name' => 'all'],
			['name' => 'widget_access', 'product_list_id' => 1],
			['name' => 'gizmo_access', 'product_list_id' => 2],
		];

		$roles = $this->table('permissions');
		$roles->insert($data)->saveData();
	}
}
