<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 19 Nov 2017 10:58:38 +0000.
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
 * @property \App\ClientDatum $client_datum
 * @property \App\Institute $institute
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

	public function client_datum()
	{
		return $this->belongsTo(\App\ClientDatum::class, 'clientId');
	}

	public function institute()
	{
		return $this->belongsTo(\App\Institute::class, 'instituteId');
	}
}
