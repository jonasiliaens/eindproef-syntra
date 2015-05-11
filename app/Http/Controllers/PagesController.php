<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Auth;

class PagesController extends Controller {

	/**
	 * Display the home page.
	 *
	 * @return Response
	 */
	public function home()
	{
		return view('pages.home');
	}

	/**
	 * Display the trainingen page.
	 *
	 * @return Response
	 */
	public function trainingen()
	{
		return view('pages.trainingen');
	}

	/**
	 * Display the About Us page.
	 *
	 * @return Response
	 */
	public function about()
	{
		return view('pages.about');
	}

	/**
	 * Display the biotim page.
	 *
	 * @return Response
	 */
	public function biotim()
	{
		return view('pages.biotim');
	}

	/**
	 * Display the biowim page.
	 *
	 * @return Response
	 */
	public function biowim()
	{
		return view('pages.biowim');
	}

	/**
	 * Display the Contact page.
	 *
	 * @return Response
	 */
	public function contact()
	{
		return view('pages.contact');
	}

	/**
	 * Display the Contact page.
	 *
	 * @return Response
	 */
	public function processcontact()
	{
		$input = Request::all();

		return $input;
	}

	/**
	 * Display the Admin page.
	 *
	 * @return Response
	 */
	public function admin()
	{
		if (Auth::user()) 
		{
			$user = Auth::user();

			if ($user['user_type'] === 0)
			{
				return view('pages.admin');
			}
			else
			{
				return redirect('home');
			}
		}
		else
		{
			return view('auth.login');
		}
	}

}
