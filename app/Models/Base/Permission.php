<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Feb 2019 19:06:12 +0000.
 */

namespace ManagerMembers\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Permission
 * 
 * @property int $id
 * @property string $name
 * @property string $label
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models\Base
 */
class Permission extends Eloquent
{
	public function users()
	{
		return $this->belongsToMany(\ManagerMembers\Models\User::class, 'user_permissions')
					->withPivot('id')
					->withTimestamps();
	}
}
