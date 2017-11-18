<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 11:33:35 +0000.
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
}
