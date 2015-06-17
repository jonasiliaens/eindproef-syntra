<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

	/**
	 * The database table used by the model.
	 * 
	 * @var string
	 */
	protected $table = 'countries';

	/**
	 * The fields that that are mass assignable.
	 * 
	 * @var [type]
	 */
	protected $fillable = [
		'country'
	];

	/**
	 * A Country has many users.
	 * 
	 * @return [type] [description]
	 */
	public function users()
	{
		return $this->hasMany('App\User');
	}

}
