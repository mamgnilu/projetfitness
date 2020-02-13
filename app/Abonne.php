<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Abonne
 * 
 * @property int $id
 * @property string $telephone
 * @property Carbon $create_at
 * @property Carbon $update_at
 * @property Carbon $delete_at
 * @property int $gestionnaires_id
 * @property string $motivation
 * 
 * @property Gestionnaire $gestionnaire
 * @property Collection|Abonnement[] $abonnements
 * @property Collection|Evalution[] $evalutions
 *
 * @package App
 */
class Abonne extends Model
{
	protected $table = 'abonnes';
	public $timestamps = false;

	protected $casts = [
		'gestionnaires_id' => 'int'
	];

	protected $dates = [
		'create_at',
		'update_at',
		'delete_at'
	];

	protected $fillable = [
		'telephone',
		'create_at',
		'update_at',
		'delete_at',
		'gestionnaires_id',
		'motivation'
	];

	public function gestionnaire()
	{
		return $this->belongsTo(Gestionnaire::class, 'gestionnaires_id');
	}

	public function abonnements()
	{
		return $this->hasMany(Abonnement::class, 'abonnes_id');
	}

	public function evalutions()
	{
		return $this->hasMany(Evalution::class, 'abonnes_id');
	}
}
