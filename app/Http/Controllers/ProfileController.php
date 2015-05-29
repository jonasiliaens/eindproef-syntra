<?php namespace App\Http\Controllers;

use App\User;
use App\Address;
use App\Town;
use App\Country;
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
	 * Show the profile of the authenticated user with the associated address.
	 *
	 * @return Response
	 */
	public function index()
	{
		$userId = Auth::user()->id;
		$user = User::with('address')->find($userId);
		$towns 	= Town::all()->lists('label', 'id');
		$countries 	= Country::lists('country', 'id');

		return view('users.profile', compact('user', 'towns', 'countries'));
	}

	/**
	 * Update the user's profileinformation with the associated address.
	 * 
	 * @param  User           $user    [description]
	 * @param  ProfileRequest $request [description]
	 * @return [type]                  [description]
	 */
	public function update(User $user, ProfileRequest $request)
	{
		$userId = Auth::user()->id;
		$user = User::with('address')->find($userId);
		$user->update($request->all());
		$user->address->update($request['address']);

		$name = Auth::user()->name;
		
		flash()->success('Uw profielgegevens zijn succesvol bijgewerkt '. $name . '!');
		
		return redirect('profiel');

	}
	
}
