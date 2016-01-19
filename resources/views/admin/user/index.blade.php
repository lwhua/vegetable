@extends('layouts.master')
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
                                <a id="sample_editable_1_new" class="btn sbold green" href="{{ url('user/create') }}"> 
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
                            <th>用户名</th>
                            <th>真实姓名</th>
                            <th>邮箱</th>
                            <th>注册时间</th>
                            <th>最后登录</th>
                            <th>角色</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr class="odd gradeX">
                                <td>
                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                <td>{{ $user->user_name }}</td>
                                <td>{{ $user->real_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ date('Y-m-d H:i:s', $user->created) }}</td>
                                <td>{{ date('Y-m-d H:i:s', $user->last_login) }}</td>
                                <td>{{ $user->role?$user->role->role_name:'-'  }}</td>
                                <td>
                                    <div class="am-btn-toolbar">
                                        {!! Form::open(array('action'=>array('Admin\UserController@destroy',$user->id),'method'=>'DELETE')) !!}
                                        
                                         <a href="{{ action('Admin\UserController@edit',array('id'=>$user->id)) }}" >
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






