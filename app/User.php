<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 16 Nov 2017 13:20:33 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $userTypeId
 * @property int $branchId
 * @property int $accountCreatorId
 * @property bool $isVisible
 *
 * @package App
 */
class User extends Eloquent
{
	protected $casts = [
		'userTypeId' => 'int',
		'branchId' => 'int',
		'accountCreatorId' => 'int',
		'isVisible' => 'bool'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'password',
		'remember_token',
		'userTypeId',
		'branchId',
		'accountCreatorId',
		'isVisible'
	];
}
