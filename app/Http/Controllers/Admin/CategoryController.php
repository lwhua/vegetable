<?php namespace App\Http\Controllers\Admin;
/**
 * 商品管理页面
 */
// use App\Http\Requests;
use Request;
use App\Http\Controllers\Admin\Controller;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller {

    protected $viewName = 'admin.category';

    /**
     * @param RoleRepository $role
     */
    function __construct(CategoryRepository $category)
    {
        $this->repository = $category;
    }




}
