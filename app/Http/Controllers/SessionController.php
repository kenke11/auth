<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
	public function login(LoginRequest $request)
	{
		if (auth()->attempt($request->validated()))
		{
			if (auth()->user()->email_verified_at === null)
			{
				auth()->logout();
				return redirect()->route('home')->with('info', 'Your email not verified!');
			}
			else
			{
				$request->session()->regenerate();
				return redirect('/')->with('success', 'Welcome Back my Sempai!');
			}
		}
		else
		{
			throw ValidationException::withMessages(
				[
					'not_login' => 'Email or password incorrect',
				]
			);
		}
	}

	public function logout()
	{
		auth()->logout();
		return redirect()->route('home')->with('success', 'Bey my Sempai!');
	}
}
