<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 19 Nov 2017 10:58:38 +0000.
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
 * @property \Illuminate\Database\Eloquent\Collection $institute_suggestions
 * @property \Illuminate\Database\Eloquent\Collection $institute_up_votes
 *
 * @package App
 */
class ClientData extends Eloquent
{
	protected $table = "client_data";
	
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

	public function institute_suggestions()
	{
		return $this->hasMany(\App\InstituteSuggestion::class, 'clientId');
	}

	public function institute_up_votes()
	{
		return $this->hasMany(\App\InstituteUpVote::class, 'clientId');
	}
}
