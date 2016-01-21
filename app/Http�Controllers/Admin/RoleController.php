<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Repositories\RoleRepository;
use App\Http\Controllers\Admin\Controller;

class RoleController extends Controller
{
    protected $viewName = 'admin.role';

    /**
     * @param RoleRepository $role
     */
    function __construct(RoleRepository $role)
    {
        $this->repository = $role;
    }

}
