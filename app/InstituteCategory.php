<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 19 Nov 2017 10:58:38 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class InstituteCategory
 * 
 * @property int $id
 * @property string $categoryName
 * @property bool $isVisible
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $institutes
 *
 * @package App
 */
class InstituteCategory extends Eloquent
{
	protected $casts = [
		'isVisible' => 'bool'
	];

	protected $fillable = [
		'categoryName',
		'isVisible'
	];

	public function institutes()
	{
		return $this->hasMany(\App\Institute::class, 'categoryId');
	}
}
