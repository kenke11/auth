<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Mail\VerifyEmail;
use App\Models\User;
use App\Models\VerifyUser;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
	public function store(RegisterRequest $request)
	{
		$registerField = $request->validated();
		$registerField['password'] = bcrypt($registerField['password']);
		$user = User::create($registerField);
//		Auth::login($user);
		Session::flash('success', 'Your account has been created.');

		VerifyUser::create([
			'token'   => Str::random(60),
			'user_id' => $user->id,
		]);

		Mail::to($user->email)->send(new VerifyEmail($user));

		return redirect()->route('profile');
	}

	public function verifyEmail($token)
	{
		$verifiedUser = VerifyUser::where('token', $token)->first();
		if (isset($verifiedUser))
		{
			$user = $verifiedUser->user;
			if (!$user->email_verified_at)
			{
				$user->email_verified_at = Carbon::now();
				$user->save();
				return redirect()->route('verified')->with('success', 'Your email has been verified!');
			}
			else
			{
				return redirect()->back()->with('info', 'Your email has already been verified');
			}
		}
		else
		{
			redirect()->route('home')->with('error', 'Something wend wrong!');
		}
	}
}
