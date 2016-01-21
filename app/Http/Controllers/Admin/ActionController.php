<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Repositories\ActionRepository;
use App\Http\Controllers\Admin\Controller;
class ActionController extends Controller
{

    protected $viewName = 'admin.action';

    /**
     * @param ActionRepository $repository
     */
    function __construct(ActionRepository $repository)
    {
        $this->repository = $repository;
    }

}
