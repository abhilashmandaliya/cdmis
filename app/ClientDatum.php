<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 16 Nov 2017 13:20:33 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ClientDatum
 * 
 * @property int $id
 * @property string $clientName
 * @property string $clientEmail
 * @property string $clientNumber
 * @property string $clientPassword
 * @property bool $emailSentFlag
 * @property bool $isVisible
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App
 */
class ClientDatum extends Eloquent
{
	protected $casts = [
		'emailSentFlag' => 'bool',
		'isVisible' => 'bool'
	];

	protected $fillable = [
		'clientName',
		'clientEmail',
		'clientNumber',
		'clientPassword',
		'emailSentFlag',
		'isVisible'
	];
}
