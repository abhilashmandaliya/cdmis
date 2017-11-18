<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 Nov 2017 11:33:35 +0000.
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
