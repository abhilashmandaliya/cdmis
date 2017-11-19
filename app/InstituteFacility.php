<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 19 Nov 2017 10:58:38 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class InstituteFacility
 * 
 * @property int $id
 * @property int $facilityId
 * @property int $instituteId
 * @property bool $isVisible
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Facility $facility
 * @property \App\Institute $institute
 *
 * @package App
 */
class InstituteFacility extends Eloquent
{
	protected $casts = [
		'facilityId' => 'int',
		'instituteId' => 'int',
		'isVisible' => 'bool'
	];

	protected $fillable = [
		'facilityId',
		'instituteId',
		'isVisible'
	];

	public function facility()
	{
		return $this->belongsTo(\App\Facility::class, 'facilityId');
	}

	public function institute()
	{
		return $this->belongsTo(\App\Institute::class, 'instituteId');
	}
}
