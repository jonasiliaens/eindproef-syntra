<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class ProductRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		if (Auth::user()['user_type'] === 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' 			=> 'required',
			'description' 	=> 'required',
			'price' 		=> 'required|numeric',
			'category_id' 	=> 'required|numeric',
			'brand_id'	 	=> 'required|numeric',
			'material_id' 	=> 'required|numeric',
			'size_list' 	=> 'required',
			'color_list' 	=> 'required',
			
		];
	}

}
