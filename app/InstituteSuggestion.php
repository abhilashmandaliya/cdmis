<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 19 Nov 2017 10:58:38 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class InstituteSuggestion
 * 
 * @property int $id
 * @property int $clientId
 * @property bool $isSelectionDone
 * @property bool $isVisible
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\ClientDatum $client_datum
 *
 * @package App
 */
class InstituteSuggestion extends Eloquent
{
	protected $casts = [
		'clientId' => 'int',
		'isSelectionDone' => 'bool',
		'isVisible' => 'bool'
	];

	protected $fillable = [
		'clientId',
		'isSelectionDone',
		'isVisible'
	];

	public function client_datum()
	{
		return $this->belongsTo(\App\ClientDatum::class, 'clientId');
	}
}
