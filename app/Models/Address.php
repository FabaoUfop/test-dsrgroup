<?php

namespace ManagerMembers\Models;

/**
 * @property mixed address
 */
class Address extends \ManagerMembers\Models\Base\Address
{
	protected $fillable = [
		'member_id',
		'street',
		'number',
		'complement',
		'neighborhood',
		'city',
		'state',
		'postal_code'
	];
}
