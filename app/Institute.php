<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 19 Nov 2017 10:58:38 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Institute
 * 
 * @property int $id
 * @property string $instituteName
 * @property int $categoryId
 * @property bool $isVisible
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $logo_path
 * 
 * @property \App\InstituteCategory $institute_category
 * @property \Illuminate\Database\Eloquent\Collection $institute_cities
 * @property \Illuminate\Database\Eloquent\Collection $events
 * @property \Illuminate\Database\Eloquent\Collection $institute_facilities
 * @property \Illuminate\Database\Eloquent\Collection $institute_programs
 * @property \Illuminate\Database\Eloquent\Collection $institute_up_votes
 *
 * @package App
 */
class Institute extends Eloquent
{
	protected $casts = [
		'categoryId' => 'int',
		'isVisible' => 'bool'
	];

	protected $fillable = [
		'instituteName',
		'categoryId',
		'isVisible',
		'logo_path'
	];

	public function institute_category()
	{
		return $this->belongsTo(\App\InstituteCategory::class, 'categoryId');
	}

	public function institute_cities()
	{
		return $this->hasMany(\App\InstituteCity::class, 'instituteId');
	}

	public function events()
	{
		return $this->belongsToMany(\App\Event::class, 'institute_events', 'instituteId', 'eventId')
					->withPivot('id', 'isVisible')
					->withTimestamps();
	}

	public function institute_facilities()
	{
		return $this->hasMany(\App\InstituteFacility::class, 'instituteId');
	}

	public function institute_programs()
	{
		return $this->hasMany(\App\InstituteProgram::class, 'instituteId');
	}

	public function institute_up_votes()
	{
		return $this->hasMany(\App\InstituteUpVote::class, 'instituteId');
	}
}
