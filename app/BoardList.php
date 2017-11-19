<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 19 Nov 2017 10:58:38 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class BoardList
 * 
 * @property int $id
 * @property string $boardName
 * @property bool $isVisible
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $institute_programs
 *
 * @package App
 */
class BoardList extends Eloquent
{
	protected $casts = [
		'isVisible' => 'bool'
	];

	protected $fillable = [
		'boardName',
		'isVisible'
	];

	public function institute_programs()
	{
		return $this->hasMany(\App\InstituteProgram::class, 'boardId');
	}
}
