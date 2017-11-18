<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 11:33:35 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class InstituteCity
 * 
 * @property int $id
 * @property int $instituteId
 * @property int $cityId
 * @property string $websiteLink
 * @property string $contactNumber
 * @property bool $isVisible
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
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
		'cityId',
		'websiteLink',
		'contactNumber',
		'isVisible'
	];
}
