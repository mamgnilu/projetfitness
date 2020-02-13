<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Moniteur
 * 
 * @property int $id
 * @property string $telephone
 * @property Carbon $create_at
 * @property Carbon $update_at
 * @property Carbon $delete_at
 * @property int $gestionnaires_id
 * @property string $nom
 * @property string $prenom
 * @property string $adresse
 * 
 * @property Gestionnaire $gestionnaire
 * @property Collection|Seance[] $seances
 *
 * @package App
 */
class Moniteur extends Model
{
	protected $table = 'moniteurs';
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
		'nom',
		'prenom',
		'adresse'
	];

	public function gestionnaire()
	{
		return $this->belongsTo(Gestionnaire::class, 'gestionnaires_id');
	}

	public function seances()
	{
		return $this->hasMany(Seance::class, 'moniteurs_id');
	}
}
