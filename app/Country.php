<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

	/**
	 * The fields that that are mass assignable.
	 * 
	 * @var [type]
	 */
	protected $fillable = [
		'country'
	];

	/**
	 * The database table used by the model.
	 * 
	 * @var string
	 */
	protected $table = 'countries';

	/**
	 * A Country has many addresses
	 * 
	 * @return [type] [description]
	 */
	public function addresses()
	{
		return $this->hasMany('App\Address');
	}

}
