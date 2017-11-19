<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 19 Nov 2017 10:58:38 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class CourseList
 * 
 * @property int $id
 * @property string $courseName
 * @property bool $isActive
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $institute_courses
 *
 * @package App
 */
class CourseList extends Eloquent
{
	protected $casts = [
		'isActive' => 'bool'
	];

	protected $fillable = [
		'courseName',
		'isActive'
	];

	public function institute_courses()
	{
		return $this->hasMany(\App\InstituteCourse::class, 'courseId');
	}
}
