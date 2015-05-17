<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model {

	/**
	 * The database table used by the model.
	 * 
	 * @var string
	 */
	protected $table = 'colors';

	/**
	 * The fields that that are mass assignable.
	 * 
	 * @var [type]
	 */
	protected $fillable = [
		'color'
	];

	/**
	 * Get the products available in a given size
	 * 
	 * @return [type] [description]
	 */
	public function products()
	{
		return $this->belongsToMany('App\Product');
	}


}
