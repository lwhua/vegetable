<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Repositories\UserRepository;
use App\Http\Controllers\Admin\Controller;
class UserController extends Controller
{

    protected $viewName = 'admin.user';

    /**
     * @param UserRepository $userRepository
     */
    function __construct(UserRepository $userRepository)
    {
        $this->repository = $userRepository;
        
    }

}
