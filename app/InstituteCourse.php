<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 16 Nov 2017 13:20:33 +0000.
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
}
