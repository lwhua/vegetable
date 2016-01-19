<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
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
