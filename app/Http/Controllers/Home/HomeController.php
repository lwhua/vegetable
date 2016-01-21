<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Home\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
	
    }


    public function about(){

        return view('home.about');
    }

    public function contact(){

        return view('home.contact');
    }

    public function employeers(){

        return view('home.employeers');
    }
}
