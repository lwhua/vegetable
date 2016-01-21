<?php namespace App\Http\Controllers\Admin;
/**
 * 商品管理页面
 */
use App\Http\Requests;
use App\Http\Controllers\Admin\Controller;
use App\Repositories\GoodRepository;

class GoodController extends Controller {

	protected $viewName = 'admin.good';

    /**
     * @param RoleRepository $role
     */
    function __construct(GoodRepository $good)
    {
        $this->repository = $good;
    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	// public function index()
	// {
 //        return view('admin.test2');
	// }

	

}
