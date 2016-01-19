<?php namespace App\Http\Controllers\Admin;

use Request;
use Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    public function login()
    {
        // return view('auth.login');
        if (Auth::check()) {
            return redirect('/admin/home');
        }
        return view('admin.login');
    }

    public function doLogin()
    {
        if (Auth::attempt(array('user_name' => Request::input('user_name'),
                                'password'  => Request::input('password')))
        ) {

            return redirect('/admin/home');
        }
        session()->flash('msg','用户名或者密码错误！');
        return redirect('/admin/login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/admin/login');
    }
}
