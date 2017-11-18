<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 11:33:35 +0000.
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
