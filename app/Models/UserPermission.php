<?php

namespace ManagerMembers\Models;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class UserPermission extends \ManagerMembers\Models\Base\UserPermission implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
		'user_id',
		'permission_id'
	];
}
