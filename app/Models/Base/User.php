<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 25 Feb 2019 19:00:47 +0000.
 */

namespace ManagerMembers\Models\Base;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $role
 * @property string $email
 * @property \Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $members
 * @property \Illuminate\Database\Eloquent\Collection $permissions
 *
 * @package App\Models\Base
 */
class User extends Authenticatable
{
	protected $dates = [
		'email_verified_at'
	];

	public function members()
	{
		return $this->hasMany(\App\Models\Member::class);
	}

	public function permissions()
	{
		return $this->belongsToMany(\App\Models\Permission::class, 'user_permissions')
					->withPivot('id')
					->withTimestamps();
	}
}
