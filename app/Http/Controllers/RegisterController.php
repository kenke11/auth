<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(RegisterRequest $request){
        User::create($request->validated());
        session()->flash('success', 'Your account has been created.');
        return redirect()->route('profile');
    }
}
