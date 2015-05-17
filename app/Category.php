<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	/**
	 * The database table used by the model.
	 * 
	 * @var string
	 */
	protected $table = 'categories';

	/**
	 * The fields that that are mass assignable.
	 * 
	 * @var [type]
	 */
	protected $fillable = [
		'category'
	];

	/**
	 * A Category has many products
	 * 
	 * @return [type] [description]
	 */
	public function products()
	{
		return $this->hasMany('App\Product');
	}

}
