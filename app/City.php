<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 19 Nov 2017 10:58:38 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class City
 * 
 * @property int $id
 * @property string $cityName
 * @property int $stateId
 * @property bool $isVisible
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\State $state
 * @property \Illuminate\Database\Eloquent\Collection $consultancy_branches
 * @property \Illuminate\Database\Eloquent\Collection $institute_cities
 *
 * @package App
 */
class City extends Eloquent
{
	protected $casts = [
		'stateId' => 'int',
		'isVisible' => 'bool'
	];

	protected $fillable = [
		'cityName',
		'stateId',
		'isVisible'
	];

	public function state()
	{
		return $this->belongsTo(\App\State::class, 'stateId');
	}

	public function consultancy_branches()
	{
		return $this->hasMany(\App\ConsultancyBranch::class, 'branchCity');
	}

	public function institute_cities()
	{
		return $this->hasMany(\App\InstituteCity::class, 'cityId');
	}
}
