<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 19 Nov 2017 10:58:38 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Facility
 * 
 * @property int $id
 * @property string $facilityName
 * @property bool $isActive
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $institute_facilities
 *
 * @package App
 */
class Facility extends Eloquent
{
	protected $casts = [
		'isActive' => 'bool'
	];

	protected $fillable = [
		'facilityName',
		'isActive'
	];

	public function institute_facilities()
	{
		return $this->hasMany(\App\InstituteFacility::class, 'facilityId');
	}
}
