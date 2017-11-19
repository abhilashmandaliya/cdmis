<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 19 Nov 2017 10:58:38 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class InstituteCourse
 * 
 * @property int $id
 * @property int $courseId
 * @property int $instituteProgramId
 * @property bool $isVisible
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\CourseList $course_list
 * @property \App\InstituteProgram $institute_program
 *
 * @package App
 */
class InstituteCourse extends Eloquent
{
	protected $casts = [
		'courseId' => 'int',
		'instituteProgramId' => 'int',
		'isVisible' => 'bool'
	];

	protected $fillable = [
		'courseId',
		'instituteProgramId',
		'isVisible'
	];

	public function course_list()
	{
		return $this->belongsTo(\App\CourseList::class, 'courseId');
	}

	public function institute_program()
	{
		return $this->belongsTo(\App\InstituteProgram::class, 'instituteProgramId');
	}
}
