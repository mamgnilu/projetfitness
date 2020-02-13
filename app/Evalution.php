<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Evalution
 * 
 * @property int $id
 * @property string $taille
 * @property string $etat_tension
 * @property string $poids
 * @property Carbon $create_at
 * @property Carbon $update_at
 * @property Carbon $delete_at
 * @property string $nom
 * @property string $prenom
 * @property string $ddn
 * @property int $abonnes_id
 * 
 * @property Abonne $abonne
 *
 * @package App
 */
class Evalution extends Model
{
	protected $table = 'evalutions';
	public $timestamps = false;

	protected $casts = [
		'abonnes_id' => 'int'
	];

	protected $dates = [
		'create_at',
		'update_at',
		'delete_at'
	];

	protected $fillable = [
		'taille',
		'etat_tension',
		'poids',
		'create_at',
		'update_at',
		'delete_at',
		'nom',
		'prenom',
		'ddn',
		'abonnes_id'
	];

	public function abonne()
	{
		return $this->belongsTo(Abonne::class, 'abonnes_id');
	}
}
