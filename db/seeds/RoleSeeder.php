<?php

use Phinx\Seed\AbstractSeed;

class RoleSeeder extends AbstractSeed {
	/**
	 * Run Method.
	 *
	 * Write your database seeder using this method.
	 *
	 * More information on writing seeders is available here:
	 * https://book.cakephp.org/phinx/0/en/seeding.html
	 */
	public function run() {
		$row = $this->fetchRow('SELECT COUNT(*) as cnt FROM roles');
		if ($row['cnt'] > 0) {
			echo 'The roles table already has data.';
			return;
		}

		$data = [
			['name' => 'Admin'],
			['name' => 'Widget Customer'],
			['name' => 'Gizmo Customer'],
		];

		$roles = $this->table('roles');
		$roles->insert($data)->saveData();
	}
}
