<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 16 Nov 2017 13:20:33 +0000.
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
}
