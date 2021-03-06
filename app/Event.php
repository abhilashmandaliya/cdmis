<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 19 Nov 2017 10:58:38 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Event
 * 
 * @property int $id
 * @property string $eventName
 * @property \Carbon\Carbon $start_date_time
 * @property \Carbon\Carbon $end_date_time
 * @property bool $isActive
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $institutes
 *
 * @package App
 */
class Event extends Eloquent
{
	protected $casts = [
		'isActive' => 'bool'
	];

	protected $dates = [
		'start_date_time',
		'end_date_time'
	];

	protected $fillable = [
		'eventName',
		'start_date_time',
		'end_date_time',
		'isActive'
	];

	public function institutes()
	{
		return $this->belongsToMany(\App\Institute::class, 'institute_events', 'eventId', 'instituteId')
					->withPivot('id', 'isVisible')
					->withTimestamps();
	}
}
