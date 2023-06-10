<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Arr;

class AdministratorController extends Controller
{
    public function login_show()
    {
        return view('pages.administrator.login');
    }
    public function login_perfom(LoginRequest $request)
    {
        $data = $request->validated();
        if (auth()->attempt(Arr::only($data, ['name', 'password']), isset($data['remember']))) {
            session()->regenerate();

            return to_route('web.administrator.dashboard');
        } else {
            return back()->withErrors(['name' => ['username mismatch'], 'password' => ['password mismatch']]);
        }
    }
    public function logout_perfom()
    {
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();

        return to_route('web.administrator.login_show');
    }
}
