@extends('layouts.master')
@section('title', '后台管理系统-角色管理')
@section('css')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{asset('assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css">
<!-- END PAGE LEVEL PLUGINS -->
@endsection
@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a id="sample_editable_1_new" class="btn sbold green" href="{{ url('admin/role/create') }}"> 
                                    新增
                                    <i class="fa fa-plus"></i>

                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group pull-right">
                                <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">工具
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-print"></i> 打印 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-pdf-o"></i> 保存为PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-excel-o"></i> 导出为Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /> </th>
                            <th>角色名称</th>
                            <th>角色描述</th>
                            <th>创建者</th>
                            <th>创建时间</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $role)
                            <tr class="odd gradeX">
                                <td>
                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                <td>{{ $role->role_name }}</td>
                                <td>{{ $role->description }}</td>
                                <td>{{ $role->user_id }}</td>
                                <td>{{ date('Y-m-d H:i:s', $role->created) }}</td>
                                <td>
                                    <div class="am-btn-toolbar">
                                        {!! Form::open(array('action'=>array('Admin\RoleController@destroy',$role->id),'method'=>'DELETE')) !!}
                                        
                                         <a href="{{ action('Admin\RoleController@edit',array('id'=>$role->id)) }}" >
                                            <label type="button" class="btn btn-circle green">编辑</label>
                                            
                                        </a> 
                                            
                                            
                                            <button type="submit" class="btn btn-circle btn-danger">删除</button>


                                        {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>
                            
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
    <!-- <div class="am-g">
        <div class="am-u-sm-12 am-u-md-6">
            <div class="am-btn-toolbar">
                <div class="am-btn-group am-btn-group-xs">
                    <a href="{{ url('role/create') }}" class="am-btn am-btn-default"><span class="am-icon-plus"></span>
                        新增</a>
                </div>
            </div>
        </div>
        <div class="am-u-sm-12 am-u-md-3">
            <div class="am-input-group am-input-group-sm">
                <input type="text" class="am-form-field">
          <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">搜索</button>
          </span>
            </div>
        </div>
    </div>
    <div class="am-g">
        <div class="am-u-sm-12">
            <table class="am-table am-table-striped am-table-hover table-main">
                <thead>
                <tr>
                    <th class="table-check"><input type="checkbox"></th>
                    <th>角色名称</th>
                    <th>角色描述</th>
                    <th>创建者</th>
                    <th>创建时间</th>
                    <th class="table-set">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>{{ $role->role_name }}</td>
                        <td>{{ $role->description }}</td>
                        <td>{{ $role->user_id }}</td>
                        <td>{{ date('Y-m-d H:i:s', $role->created) }}</td>
                        <td>
                            <div class="am-btn-toolbar">
                                {!! Form::open(array('action'=>array('Admin\RoleController@destroy',$role->id),'method'=>'DELETE')) !!}
                                <div class="am-btn-group am-btn-group-xs">
                                    <a href="{{ action('Admin\RoleController@edit',array('id'=>$role->id)) }}"
                                       class="am-btn am-btn-default am-btn-xs am-text-secondary"><span
                                                class="am-icon-pencil-square-o"></span> 编辑
                                    </a>

                                    <button type="submit"
                                            class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                                                <span
                                                        class="am-icon-trash-o"></span> 删除
                                    </button>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

    </div> -->
@endsection('content')

@section('script')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    
@endsection('script')