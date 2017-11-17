<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 17 Nov 2017 17:54:52 +0000.
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
 * @property \App\User $user
 * @property \App\ConsultancyBranch $consultancy_branch
 * @property \App\UserType $user_type
 * @property \Illuminate\Database\Eloquent\Collection $users
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

	public function user()
	{
		return $this->belongsTo(\App\User::class, 'accountCreatorId');
	}

	public function consultancy_branch()
	{
		return $this->belongsTo(\App\ConsultancyBranch::class, 'branchId');
	}

	public function user_type()
	{
		return $this->belongsTo(\App\UserType::class, 'userTypeId');
	}

	public function users()
	{
		return $this->hasMany(\App\User::class, 'accountCreatorId');
	}
}
