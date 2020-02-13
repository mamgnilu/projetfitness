<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Gestionnaire
 * 
 * @property int $id
 * @property string $telephone
 * @property Carbon $create_at
 * @property Carbon $update_at
 * @property Carbon $delete_at
 * @property int $users_id
 * 
 * @property User $user
 * @property Collection|Abonne[] $abonnes
 * @property Collection|Activite[] $activites
 * @property Collection|Moniteur[] $moniteurs
 *
 * @package App
 */
class Gestionnaire extends Model
{
	protected $table = 'gestionnaires';
	public $timestamps = false;

	protected $casts = [
		'users_id' => 'int'
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
		'users_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}

	public function abonnes()
	{
		return $this->hasMany(Abonne::class, 'gestionnaires_id');
	}

	public function activites()
	{
		return $this->hasMany(Activite::class, 'gestionnaires_id');
	}

	public function moniteurs()
	{
		return $this->hasMany(Moniteur::class, 'gestionnaires_id');
	}
}
