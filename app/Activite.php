<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Activite
 * 
 * @property int $id
 * @property Carbon $create_at
 * @property Carbon $update_at
 * @property Carbon $delete_at
 * @property int $gestionnaires_id
 * @property string $nom
 * 
 * @property Gestionnaire $gestionnaire
 * @property Collection|Abonnement[] $abonnements
 * @property Collection|Seance[] $seances
 *
 * @package App
 */
class Activite extends Model
{
	protected $table = 'activites';
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
		'create_at',
		'update_at',
		'delete_at',
		'gestionnaires_id',
		'nom'
	];

	public function gestionnaire()
	{
		return $this->belongsTo(Gestionnaire::class, 'gestionnaires_id');
	}

	public function abonnements()
	{
		return $this->hasMany(Abonnement::class, 'activites_id');
	}

	public function seances()
	{
		return $this->hasMany(Seance::class, 'activites_id');
	}
}
