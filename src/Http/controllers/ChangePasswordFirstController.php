<?php

namespace riftone07\changepasswordfirst\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use riftone07\changepasswordfirst\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Auth;
class ChangePasswordFirstController extends Controller
{


	public function expired()
	{
		return view('changepasswordfirst::expiredpassword');
	}

	public function postExpired(Request $request)
	{
		$validatedData = $request->validate([
			'current_password' => 'required',
			'password' => 'required|confirmed|min:6',
		]);

        // Checking current password
		if (!Hash::check($request->current_password, $request->user()->password)) {
			return redirect()->back()->withErrors(['current_password' => 'Mot de passe actuelle incorrect']);
		}

		$user =  User::find(Auth::id());
		$user->password = bcrypt($request->password);
		$user->password_changed_at = Carbon::now()->toDateTimeString();
		$user->save();

		return redirect()->back()->with(['message' => 'Mot de passe changé avec success.']);
	}

}
