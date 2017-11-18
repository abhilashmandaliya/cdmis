<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 11:33:36 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class InstituteUpVote
 * 
 * @property int $id
 * @property int $clientId
 * @property int $instituteId
 * @property bool $isVerified
 * @property bool $isVisible
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App
 */
class InstituteUpVote extends Eloquent
{
	protected $casts = [
		'clientId' => 'int',
		'instituteId' => 'int',
		'isVerified' => 'bool',
		'isVisible' => 'bool'
	];

	protected $fillable = [
		'clientId',
		'instituteId',
		'isVerified',
		'isVisible'
	];
}
