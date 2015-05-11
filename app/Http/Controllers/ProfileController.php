<?php namespace App\Http\Controllers;

use App\User;
use App\Address;
use App\Http\Requests;
use App\Http\Requests\ProfileRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the profile of the authenticated user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = Auth::user();

		if ($user['address_id'] === 0)
		{	
			$user->address()->create();
		}

		return view('users.profile', compact('user'));
	}

	public function update(User $user, ProfileRequest $request)
	{
		Auth::user()->update($request->all());

		return redirect('profiel');

	}



	
}
