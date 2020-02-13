<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Abonnement
 * 
 * @property int $id
 * @property int $activites_id
 * @property int $abonnes_id
 * @property Carbon $dateDebut
 * @property Carbon $dateFin
 * @property int $montant
 * @property Carbon $datePaiement
 * 
 * @property Abonne $abonne
 * @property Activite $activite
 *
 * @package App
 */
class Abonnement extends Model
{
	protected $table = 'abonnements';
	public $timestamps = false;

	protected $casts = [
		'activites_id' => 'int',
		'abonnes_id' => 'int',
		'montant' => 'int'
	];

	protected $dates = [
		'dateDebut',
		'dateFin',
		'datePaiement'
	];

	protected $fillable = [
		'activites_id',
		'abonnes_id',
		'dateDebut',
		'dateFin',
		'montant',
		'datePaiement'
	];

	public function abonne()
	{
		return $this->belongsTo(Abonne::class, 'abonnes_id');
	}

	public function activite()
	{
		return $this->belongsTo(Activite::class, 'activites_id');
	}
}
