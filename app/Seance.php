<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Seance
 * 
 * @property int $id
 * @property int $moniteurs_id
 * @property int $activites_id
 * @property int $tauxHoaire
 * @property float $montant
 * @property Carbon $duree
 * @property Carbon $create_at
 * @property Carbon $update_at
 * @property Carbon $delete_at
 * 
 * @property Activite $activite
 * @property Moniteur $moniteur
 *
 * @package App
 */
class Seance extends Model
{
	protected $table = 'seances';
	public $timestamps = false;

	protected $casts = [
		'moniteurs_id' => 'int',
		'activites_id' => 'int',
		'tauxHoaire' => 'int',
		'montant' => 'float'
	];

	protected $dates = [
		'duree',
		'create_at',
		'update_at',
		'delete_at'
	];

	protected $fillable = [
		'moniteurs_id',
		'activites_id',
		'tauxHoaire',
		'montant',
		'duree',
		'create_at',
		'update_at',
		'delete_at'
	];

	public function activite()
	{
		return $this->belongsTo(Activite::class, 'activites_id');
	}

	public function moniteur()
	{
		return $this->belongsTo(Moniteur::class, 'moniteurs_id');
	}
}
