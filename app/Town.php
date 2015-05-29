<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model {

	/**
	 * The database table used by the model.
	 * 
	 * @var string
	 */
	protected $table = 'towns';

	/**
	 * The fields that that are mass assignable.
	 * 
	 * @var [type]
	 */
	protected $fillable = [
		'postcode',
		'town'
	];

	/**
	 * A Town has many addresses
	 * 
	 * @return [type] [description]
	 */
	public function addresses()
	{
		return $this->hasMany('App\Address');
	}

	public function getLabelAttribute()
	{
	    return $this->postcode . ' ' . $this->town;
	}

}
