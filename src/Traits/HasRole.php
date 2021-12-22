<?php
namespace Zoey\Traits;

trait HasRole {
	public function role() {
		return $this->belongsTo('Zoey\Models\Role');
	}

	public function hasProductListACL($productList): bool {
		// Admins can see everything
		if ($this->role_id === self::ADMIN) {
			return true;
		}

		// Everyone else needs to have the ACL checked
		return $this->role
			->permissions()
			->where('product_list_id', $productList->id)
			->count() > 0;
	}

	public function hasProductACL($product): bool {
		return $this->hasProductListACL($product->product_list);
	}
}
