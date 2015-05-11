<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class WinkelmandController extends Controller {

	/**
	 * Display a listing of all the products in the basket.
	 *
	 * @return Response
	 */
	public function basket()
	{
		return view('basket.basket');
	}

}
