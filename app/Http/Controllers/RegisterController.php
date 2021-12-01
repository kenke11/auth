<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
	public function store(RegisterRequest $request)
	{
		$registerField = $request->validated();
		$registerField['password'] = bcrypt($registerField['password']);
		$user = User::create($registerField);
		Auth::login($user);
		Session::flash('success', 'Your account has been created.');
		return redirect()->route('profile');
	}
}
