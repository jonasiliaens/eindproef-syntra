<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model {

	/**
	 * The database table used by the model.
	 * 
	 * @var string
	 */
	protected $table = 'brands';

	/**
	 * The fields that that are mass assignable.
	 * 
	 * @var [type]
	 */
	protected $fillable = [
		'brand'
	];

	/**
	 * A Brand has many products
	 * 
	 * @return [type] [description]
	 */
	public function products()
	{
		return $this->hasMany('App\Product');
	}


}
