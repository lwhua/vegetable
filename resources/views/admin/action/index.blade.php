@extends('layouts.master')
@section('content')
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="/admin">权限管理</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>操作管理</span>
        </li>
    </ul>
    
</div>
<br>

<div class="row">

    <div class="portlet box blue  col-md-12">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-wrench"></i></i>操作管理
                <a href="{{ action('Admin\ActionController@create',array('pid'=>0)) }}"
                   class="btn btn-default"><span class="icon-plus"></span> 添加
                </a>
            </div>
            <div class="tools">
                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
            </div>
        </div>
        <div class="portlet-body col-md-12">
            <ol>
                @foreach($actions as $action)
                    <li class="action col-md-12">
                        <div class="portlet box blue col-md-12">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-gift"></i>{{ $action->action_name }}</div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                </div>


                                    {!! Form::open(array('action'=>array('Admin\ActionController@destroy', $action->id),'method'=>'DELETE')) !!}
                                    <div class="btn-group ">
                                        <a href="{{ action('Admin\ActionController@create',array('pid'=>$action->id)) }}"
                                           class="btn btn-default btn-xs text-secondary"><span
                                                    class="icon-plus"></span> 添加
                                        </a>
                                        <a href="{{ action('Admin\ActionController@edit',array('pid'=>$action->id)) }}"
                                           class="btn btn-default btn-xs text-secondary"><span
                                                    class="icon-plus"></span> 编辑
                                        </a>
                                        <button type="submit"
                                                class="btn btn-default btn-xs text-danger hide-sm-only">
                                            <span class="icon-trash"></span> 删除
                                        </button>
                                    </div>
                                    {!! Form::close() !!}

                            </div>
                            <div class="portlet-body col-md-12" >
                                <ol>
                                    @foreach($action->children as $subaction)
                                        <li class="subaction col-md-4"> 
                                            <div class="portlet box blue col-md-12">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="fa fa-gift"></i>{{ $subaction->action_name }}

                                                        
                                                    </div>

                                                        <div class="btn-group ">
                                                        
                                                            {!! Form::open(array('action'=>array('Admin\ActionController@destroy', $subaction->id),'method'=>'DELETE')) !!}
                                                            
                                                            <a href="{{ action('Admin\ActionController@create',array('pid'=>$subaction->id)) }}"
                                                               class="btn btn-default btn-xs text-secondary"><span
                                                                        class="icon-plus"></span> 添加
                                                            </a>
                                                            <a href="{{ action('Admin\ActionController@edit',array('pid'=>$subaction->id)) }}"
                                                               class="btn btn-default btn-xs text-secondary"><span
                                                                        class="icon-plus"></span> 编辑
                                                            </a>
                                                            <button class="btn btn-default btn-xs text-danger hide-sm-only">
                                                                <span class="icon-trash"></span> 删除
                                                            </button>
                                                            
                                                            {!! Form::close() !!}
                                                        </div>

                                                    
                                                    <div class="tools">
                                                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                    </div>
                                                </div>
                                                <div class="portlet-body col-md-12" >
                                                    <ol>
                                                        @foreach($subaction->children as $subsubaction)

                                                            <li class="col-md-4">{{ $subsubaction->action_name }}
        
                                                                {!! Form::open(array('action'=>array('Admin\ActionController@destroy', $subsubaction->id),'method'=>'DELETE')) !!}
                                                                            

                                                                <div class="btn-group ">
                                                                    <a href="{{ action('Admin\ActionController@edit',array('pid'=>$subsubaction->id)) }}"
                                                                       class="btn btn-default btn-xs text-secondary"><span
                                                                                class="icon-plus"></span> 编辑
                                                                    </a>
                                                                    <button class="btn btn-default btn-xs text-danger hide-sm-only">
                                                                        <span class="icon-trash"></span> 删除
                                                                    </button>
                                                                </div>

                                                                {!! Form::close() !!}
                                                                
                                                            </li>
                                                        @endforeach
                                                        
                                                    </ol>
                                                </div>
                                            </div>
        
                                        </li>
                                    @endforeach
                                    
                                </ol>
                            </div>
                        </div>
                    </li>

                @endforeach
            </ol>
        </div>
    </div>


</div>


@endsection('content')