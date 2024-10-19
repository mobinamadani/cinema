<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\authRequest;
use App\Http\Requests\User\loginRequest;
use Couchbase\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function register()
    {
        return view('User.register');
    }

    public function store(authRequest $request)
    {
        /**
         * @var \App\Models\User $user
         */

        $user = \App\Models\User::query()->create([
            'name'=> $request->get('name'),
            'email'=> $request->get('email'),
            'password'=> bcrypt($request->get('password')),
        ]);

        auth()->login($user);
        return redirect(to:route('user.loginForm'));
    }

    public function loginForm()
    {
        return view('User.login');
    }

    public function login(loginRequest $request)
    {
        if(Auth::guard('web')->attempt($request->validated())) {
            $request->session()->regenerate();

        }
        return redirect('/');

    }

    public function logout(): \Illuminate\Http\RedirectResponse
    {
        auth()->logout();
        return redirect()->route('user.register');
    }

}
