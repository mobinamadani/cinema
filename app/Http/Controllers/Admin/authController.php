<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\authRequest;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;

class authController extends Controller
{
    public function login(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('Admin.login');
    }

    public function store(authRequest $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        /**
         * @var Admin $admin
         */

        $admin = Admin::query()->create([
           'name' => $request->get('name'),
           'password' => bcrypt($request->get('password')),
        ]);

        auth()->login($admin);

        return redirect('/');
    }

    public function dashboard(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('Admin.dashboard');
    }

    public function logout(): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application
    {
        auth()->logout();
        return redirect(to:route('admin.login'));
    }

}
