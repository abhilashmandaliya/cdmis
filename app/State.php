<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 16 Nov 2017 13:20:33 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class State
 * 
 * @property int $id
 * @property string $stateName
 * @property int $countryId
 * @property bool $isVisible
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Country $country
 * @property \Illuminate\Database\Eloquent\Collection $cities
 *
 * @package App
 */
class State extends Eloquent
{
	protected $casts = [
		'countryId' => 'int',
		'isVisible' => 'bool'
	];

	protected $fillable = [
		'stateName',
		'countryId',
		'isVisible'
	];

	public function country()
	{
		return $this->belongsTo(\App\Country::class, 'countryId');
	}

	public function cities()
	{
		return $this->hasMany(\App\City::class, 'stateId');
	}
}
