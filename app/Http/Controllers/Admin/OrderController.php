<?php namespace App\Http\Controllers\Admin;
/** 
 * 订单管理页面
 */
use App\Http\Requests;
use App\Http\Controllers\Admin\Controller;
use App\Repositories\OrderRepository;
class OrderController extends Controller {

	protected $viewName = 'admin.role';

	/**
     * @param RoleRepository $role
     */
    function __construct(OrderRepository $order)
    {
        $this->repository = $order;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.test1');
	}

    

}
