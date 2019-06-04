<?php

namespace ManagerMembers\Models;

class Member extends \ManagerMembers\Models\Base\Member

{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
		'user_id',
		'nome',
		'sobrenome',
		'pai',
		'mae',
		'img_profile',
		'data_nascimento',
		'cpf',
		'rg',
		'email',
		'whatsapp'
	];
}
