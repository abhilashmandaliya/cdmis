<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 19 Nov 2017 10:58:38 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class InstituteCity
 * 
 * @property int $id
 * @property int $instituteId
 * @property string $address
 * @property int $cityId
 * @property string $websiteLink
 * @property string $contactNumber
 * @property bool $isVisible
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\City $city
 * @property \App\Institute $institute
 *
 * @package App
 */
class InstituteCity extends Eloquent
{
	protected $casts = [
		'instituteId' => 'int',
		'cityId' => 'int',
		'isVisible' => 'bool'
	];

	protected $fillable = [
		'instituteId',
		'address',
		'cityId',
		'websiteLink',
		'contactNumber',
		'isVisible'
	];

	public function city()
	{
		return $this->belongsTo(\App\City::class, 'cityId');
	}

	public function institute()
	{
		return $this->belongsTo(\App\Institute::class, 'instituteId');
	}
}
