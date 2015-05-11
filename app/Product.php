<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	/**
	 * The database table used by the model.
	 * 
	 * @var string
	 */
	protected $table = 'products';

	/**
	 * The fields that that are mass assignable.
	 * 
	 * @var [type]
	 */
	protected $fillable = [
		'name',
		'description',
		'imagePath',
		'price',
	];

}
