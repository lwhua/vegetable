<?php namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
class ConfigController extends Controller {


	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		return view('config.index');
	}

}
