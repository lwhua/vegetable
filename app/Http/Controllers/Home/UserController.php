<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Home\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    // 登录页面
     public function getLogin()
     {
          return view('user.login');
     }
 
     // 登录操作
     public function postLogin()
     {
          if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
              return Redirect::to('user/dashboard')
              ->with('message', '成功登录');
          } else {
              return Redirect::to('user/login')
                    ->with('message', '用户名密码不正确')
                    ->withInput();
          }
     }
 
     // 登出
     public function getLogout()
     {
          Auth::logout();
          return Redirect::to('user/login');
     }
 
     public function getDashboard()
     {
          return view('user.dashboard');
     }
 
     // 添加新用户操作
     public function getCreate()
     {
          return view('user.create');
     }
 
     // 添加新用户操作
     public function postCreate()
     {
          $validator = Validator::make(Input::all(), User::$rules);
 
          if ($validator->passes()){
               $bAdmin = new Badmin();
               $bAdmin->nickname = Input::get('nickname');
               $bAdmin->username = Input::get('username');
               $bAdmin->email = Input::get('email');
               $user->password = Hash::make(Input::get('password'));
               $user->save();
 
               Response::json(null);
          } else {
               Response::json(['message' => '注册失败'], 410);
          }
     }
}
