<?php
namespace Zoey\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {
	public function permissions() {
		return $this->belongsToMany(
			'Zoey\Models\Permissions',
			'role_permissions',
			'role_id',
			'id',
		);
	}
}
