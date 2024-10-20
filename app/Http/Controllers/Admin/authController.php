<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\authRequest;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class authController extends Controller
{
    public function login(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('Admin.login');
    }

    public function store(authRequest $request)
    {
        if (Auth::guard('admin')->attempt($request->validated())) {
            $request->session()->regenerate();
            return redirect(to: route('admin.dashboard'));
        }
        return back()->withErrors([
            'password' => 'اطلاعات وارد شده صحیح نیست',
        ])->onlyInput('email');
    }

    public function dashboard(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('Admin.dashboard');
    }

    public function logout()
    {
        auth()->logout();
        return redirect(to:route('admin.login'));
    }

}
