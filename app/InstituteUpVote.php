<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 16 Nov 2017 13:20:33 +0000.
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
