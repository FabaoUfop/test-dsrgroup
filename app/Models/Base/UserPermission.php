<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Feb 2019 19:06:21 +0000.
 */

namespace ManagerMembers\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserPermission
 * 
 * @property int $id
 * @property int $user_id
 * @property int $permission_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \ManagerMembers\Models\Permission $permission
 * @property \ManagerMembers\Models\User $user
 *
 * @package App\Models\Base
 */
class UserPermission extends Eloquent
{
	protected $casts = [
		'user_id' => 'int',
		'permission_id' => 'int'
	];

	public function permission()
	{
		return $this->belongsTo(\ManagerMembers\Models\Permission::class);
	}

	public function user()
	{
		return $this->belongsTo(\ManagerMembers\Models\User::class);
	}
}
