<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 17 Nov 2017 17:54:52 +0000.
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
}
