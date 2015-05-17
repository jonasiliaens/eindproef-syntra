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
		'category_id',
		'brand_id',
		'material_id',
	];

	/**
	 * A product belongs to a category.
	 * 
	 * @return [type] [description]
	 */
	public function category()
	{
		return $this->belongsTo('App\Category');
	}

	/**
	 * A product belongs to a brand.
	 * 
	 * @return [type] [description]
	 */
	public function brand()
	{
		return $this->belongsTo('App\Brand');
	}

	/**
	 * A product is made out of a specific material.
	 * 
	 * @return [type] [description]
	 */
	public function material()
	{
		return $this->belongsTo('App\Material');
	}

	/**
	 * A product can be available in many sizes.
	 * 
	 * @return [type] [description]
	 */
	public function sizes()
	{
		return $this->belongsToMany('App\Size')->withTimestamps();
	}

	/**
	 * Get a list of size id's associated with the current product.
	 * 
	 * @return [array]
	 */
	public function getSizeListAttribute()
	{
		return $this->sizes->lists('id');
	}

	/**
	 * A product can be available in many colors.
	 * 
	 * @return [type] [description]
	 */
	public function colors()
	{
		return $this->belongsToMany('App\Color')->withTimestamps();
	}

	/**
	 * Get a list of color id's associated with the current product.
	 * 
	 * @return [array]
	 */
	public function getColorListAttribute()
	{
		return $this->colors->lists('id');
	}

}
