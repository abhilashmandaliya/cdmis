<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 17 Nov 2017 17:54:52 +0000.
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
