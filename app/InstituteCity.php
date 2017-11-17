<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 17 Nov 2017 17:54:52 +0000.
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
