<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

	/**
	 * The database table used by the model.
	 * 
	 * @var string
	 */
	protected $table = 'orders';

	/**
	 * The fields that that are mass assignable.
	 * 
	 * @var [type]
	 */
	protected $fillable = [
		'user_id',

	];

	/**
	 * Get the products that are ordered.
	 * 
	 * @return [type] [description]
	 */
	public function products()
	{
		return $this->belongsToMany('App\Product')->withTimestamps();
	}



}
