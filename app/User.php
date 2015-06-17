<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Order;
use App\Town;
use App\Country;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'lastname', 'email', 'password', 'street', 'number', 'box', 'town_id', 'country_id'];

	/**
	 * Set if you want to use softDelete or not.
	 * 
	 * @var boolean
	 */
	use SoftDeletes;

	protected $dates = ['deleted_at'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];


	/**
	 * A user can have many orders.
	 * 
	 * @return [type] [description]
	 */
	public function orders()
	{
		return $this->hasMany('App\Order');
	}

	/**
	 * A user is located in one town.
	 * 
	 * @return [type] [description]
	 */
	public function town()
	{
		return $this->belongsTo('App\Town');
	}

	/**
	 * A user is located in one country.
	 * 
	 * @return [type] [description]
	 */
	public function country()
	{
		return $this->belongsTo('App\Country');
	}

}
