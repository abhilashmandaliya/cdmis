<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 19 Nov 2017 10:58:38 +0000.
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
 * @property \App\Event $event
 * @property \App\Institute $institute
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

	public function event()
	{
		return $this->belongsTo(\App\Event::class, 'eventId');
	}

	public function institute()
	{
		return $this->belongsTo(\App\Institute::class, 'instituteId');
	}
}
