<?php

namespace App\Http\Controllers\Backend;

use Auth;
use Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function getLogin()
    {
        return view('backend.auth');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember))
        {
            if (Auth::user()->isAdmin()) {
                return redirect()->intended($this->redirectPath());
            } else {
                Auth::logout();
            }
        }

        return redirect($this->loginPath())
                ->withInput($request->only('username', 'remember'))
                ->withErrors([
                    'username' => $this->getFailedLoginMessage(),
                ]);
    }

    /**
     * Get the failed login message.
     *
     * @return string
     */
    protected function getFailedLoginMessage()
    {
        return 'ตรวจสอบชื่อผู้ใช้งาน และรหัสผ่านอีกครั้ง';
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('backend/auth/login');
    }

    public function redirectPath()
    {
        if (property_exists($this, 'redirectPath'))
        {
            return $this->redirectPath;
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : './backend';
    }

    public function loginPath()
    {
        return property_exists($this, 'loginPath') ? $this->loginPath : './backend/auth/login';
    }

}
