<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 17 Nov 2017 17:54:52 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ConsultancyBranch
 * 
 * @property int $id
 * @property string $contactNumber
 * @property string $branchAddress
 * @property int $branchCity
 * @property bool $isVisible
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\City $city
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App
 */
class ConsultancyBranch extends Eloquent
{
	protected $casts = [
		'branchCity' => 'int',
		'isVisible' => 'bool'
	];

	protected $fillable = [
		'contactNumber',
		'branchAddress',
		'branchCity',
		'isVisible'
	];

	public function city()
	{
		return $this->belongsTo(\App\City::class, 'branchCity');
	}

	public function users()
	{
		return $this->hasMany(\App\User::class, 'branchId');
	}
}
