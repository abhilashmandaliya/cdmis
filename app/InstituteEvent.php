<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 11:33:35 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class InstituteEvent
 * 
 * @property int $id
 * @property int $eventId
 * @property int $instituteId
 * @property bool $isVisible
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App
 */
class InstituteEvent extends Eloquent
{
	protected $casts = [
		'eventId' => 'int',
		'instituteId' => 'int',
		'isVisible' => 'bool'
	];

	protected $fillable = [
		'eventId',
		'instituteId',
		'isVisible'
	];
}
