<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 19 Nov 2017 10:58:38 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProgramList
 * 
 * @property int $id
 * @property string $programName
 * @property int $programCategoryId
 * @property int $streamId
 * @property bool $isVisible
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\ProgramCategory $program_category
 * @property \App\StreamCategory $stream_category
 * @property \Illuminate\Database\Eloquent\Collection $institute_programs
 *
 * @package App
 */
class ProgramList extends Eloquent
{
	protected $casts = [
		'programCategoryId' => 'int',
		'streamId' => 'int',
		'isVisible' => 'bool'
	];

	protected $fillable = [
		'programName',
		'programCategoryId',
		'streamId',
		'isVisible'
	];

	public function program_category()
	{
		return $this->belongsTo(\App\ProgramCategory::class, 'programCategoryId');
	}

	public function stream_category()
	{
		return $this->belongsTo(\App\StreamCategory::class, 'streamId');
	}

	public function institute_programs()
	{
		return $this->hasMany(\App\InstituteProgram::class, 'programId');
	}
}
