<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Address extends Model {

	/**
	 * The fields that that are mass assignable.
	 * 
	 * @var [type]
	 */
	protected $fillable = [
		'street',
		'number',
		'box',
		'town_id',
		'country_id'
	];

	/**
	 * The database table used by the model.
	 * 
	 * @var string
	 */
	protected $table = 'addresses';

	/**
	 * An address belongs to one User.
	 * 
	 * @return [type] [description]
	 */
	public function user()
	{
		$this->belongsTo('App\User');
	}

	/**
	 * An address is located in one town.
	 * 
	 * @return [type] [description]
	 */
	public function town()
	{
		return $this->belongsTo('App\Town');
	}

	/**
	 * An address is located in one country.
	 * 
	 * @return [type] [description]
	 */
	public function country()
	{
		return $this->belongsTo('App\Country');
	}

}
