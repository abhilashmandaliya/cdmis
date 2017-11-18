<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 11:33:36 +0000.
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
}
