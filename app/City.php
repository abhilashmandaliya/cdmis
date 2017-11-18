<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 11:33:35 +0000.
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
}
