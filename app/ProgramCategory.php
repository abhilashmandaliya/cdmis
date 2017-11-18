<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 11:33:36 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProgramCategory
 * 
 * @property int $id
 * @property string $programCategoryName
 * @property bool $isVisible
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $program_lists
 *
 * @package App
 */
class ProgramCategory extends Eloquent
{
	protected $casts = [
		'isVisible' => 'bool'
	];

	protected $fillable = [
		'programCategoryName',
		'isVisible'
	];

	public function program_lists()
	{
		return $this->hasMany(\App\ProgramList::class, 'programCategoryId');
	}
}
