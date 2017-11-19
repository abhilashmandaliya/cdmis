<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 19 Nov 2017 10:58:38 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class InstituteProgram
 * 
 * @property int $id
 * @property int $instituteId
 * @property int $programId
 * @property string $programLink
 * @property int $boardId
 * @property int $programFees
 * @property bool $isVisible
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\BoardList $board_list
 * @property \App\Institute $institute
 * @property \App\ProgramList $program_list
 * @property \Illuminate\Database\Eloquent\Collection $institute_courses
 *
 * @package App
 */
class InstituteProgram extends Eloquent
{
	protected $casts = [
		'instituteId' => 'int',
		'programId' => 'int',
		'boardId' => 'int',
		'programFees' => 'int',
		'isVisible' => 'bool'
	];

	protected $fillable = [
		'instituteId',
		'programId',
		'programLink',
		'boardId',
		'programFees',
		'isVisible'
	];

	public function board_list()
	{
		return $this->belongsTo(\App\BoardList::class, 'boardId');
	}

	public function institute()
	{
		return $this->belongsTo(\App\Institute::class, 'instituteId');
	}

	public function program_list()
	{
		return $this->belongsTo(\App\ProgramList::class, 'programId');
	}

	public function institute_courses()
	{
		return $this->hasMany(\App\InstituteCourse::class, 'instituteProgramId');
	}
}
