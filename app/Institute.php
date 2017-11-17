<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 17 Nov 2017 17:54:52 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Institute
 * 
 * @property int $id
 * @property string $instituteName
 * @property int $categoryId
 * @property bool $isVisible
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $logo_path
 *
 * @package App
 */
class Institute extends Eloquent
{
	protected $casts = [
		'categoryId' => 'int',
		'isVisible' => 'bool'
	];

	protected $fillable = [
		'instituteName',
		'categoryId',
		'isVisible',
		'logo_path'
	];
}
