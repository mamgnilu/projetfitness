<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $uuid
 * @property string $nom
 * @property string $prenom
 * @property string $telephone
 * @property string $email
 * @property string $role
 * @property string $password
 * @property string $remember_token
 * @property Carbon $create_at
 * @property Carbon $update_at
 * @property Carbon $delete_at
 * 
 * @property Collection|Admin[] $admins
 * @property Collection|Gestionnaire[] $gestionnaires
 *
 * @package App
 */
class User extends Model
{
	protected $table = 'users';
	public $timestamps = false;

	protected $dates = [
		'create_at',
		'update_at',
		'delete_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'uuid',
		'nom',
		'prenom',
		'telephone',
		'email',
		'role',
		'password',
		'remember_token',
		'create_at',
		'update_at',
		'delete_at'
	];

	public function admins()
	{
		return $this->hasMany(Admin::class, 'users_id');
	}

	public function gestionnaires()
	{
		return $this->hasMany(Gestionnaire::class, 'users_id');
	}
}
