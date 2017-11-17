<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 17 Nov 2017 17:54:52 +0000.
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
}
