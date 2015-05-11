<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ClassesController extends Controller {

	/**
	 * Display the Kidz Mix page.
	 *
	 * @return Response
	 */
	public function kidzmix()
	{
		return view('classes.kidzmix');
	}

	/**
	 * Display the Condition class page.
	 *
	 * @return Response
	 */
	public function condition()
	{
		return view('classes.condition');
	}

	/**
	 * Display the Muay Thai class page.
	 *
	 * @return Response
	 */
	public function muaythai()
	{
		return view('classes.muaythai');
	}

	/**
	 * Display the Muay Thai class page.
	 *
	 * @return Response
	 */
	public function techniek()
	{
		return view('classes.techniek');
	}

	/**
	 * Display the Privéles class page.
	 *
	 * @return Response
	 */
	public function privetraining()
	{
		return view('classes.privetraining');
	}
	

}
