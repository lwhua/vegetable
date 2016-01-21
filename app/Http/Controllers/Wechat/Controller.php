<?php namespace App\Http\Controllers\Wechat;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Request;
use Illuminate\Http\Request as IRequest;

abstract class Controller extends BaseController
{

    use DispatchesCommands, ValidatesRequests;
    protected $viewName;
    protected $repository;
    public $menu;


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = $this->repository->index();


        return view($this->viewName . '.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    

}
