@extends('layouts.master')
@section('title', '后台管理系统-权限管理')
@section('content')

<div class="container">
<div class="row">
    {!! Form::open(array('action'=>array('Admin\ActionController@store'),'method'=>'POST','class'=>'form form-horizontal')) !!}

        <div class="col-sm-12 col-md-8 ">
            <div class="form-group">
                <label for="role_name" class="col-sm-3 form-label">操作名称</label>

                <div class="col-sm-9">
                    {!! Form::text('action_name') !!}
                    <small></small>
                </div>
            </div>

            <div class="form-group">
                <label for="description" class="col-sm-3 form-label">命名空间</label>

                <div class="col-sm-9">
                    {!! Form::text('action_namespace', 'App\Http\Controllers\Admin', array('placeholder'=>'App\Http\Controllers\Admin')) !!}
                    <small></small>
                </div>
            </div>

            <div class="form-group">
                <label for="description" class="col-sm-3 form-label">类名</label>

                <div class="col-sm-9">
                    {!! Form::text('action_class', null, array('placeholder'=>'Test1Controller')) !!}
                    <small></small>
                </div>
            </div>

            <div class="form-group">
                <label for="description" class="col-sm-3 form-label">方法名</label>

                <div class="col-sm-9">
                    {!! Form::text('action_method',null, array('placeholder'=>'index')) !!}
                    <small></small>
                </div>
            </div>

            <div class="form-group">
                <label for="description" class="col-sm-3 form-label">action</label>

                <div class="col-sm-9">
                    {!! Form::text('action','Admin\\',array('placeholder'=>'Admin\TestController@index')) !!}
                    <small></small>
                </div>
            </div>

            <div class="form-group">
                <label for="description" class="col-sm-3 form-label">样式</label>

                <div class="col-sm-9">
                    {!! Form::text('prefix_class') !!}
                    <small></small>
                </div>
            </div>

            <div class="form-group">
                <label for="description" class="col-sm-3 form-label">描述信息</label>

                <div class="col-sm-9">
                    {!! Form::text('description') !!}
                    <small></small>
                </div>
            </div>

            {!! Form::hidden('pid', Request::input('pid')) !!}

            <div class="form-group">
                <div class="col-sm-9 col-sm-push-3">
                    <button type="submit" class="btn btn-primary">保 存</button>
                </div>
            </div>
        </div>

    {!! Form::close() !!}
    </div>
    </div>
@endsection('content')