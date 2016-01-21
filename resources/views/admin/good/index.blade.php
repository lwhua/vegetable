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
                                <a id="sample_editable_1_new" class="btn sbold green" href="{{ url('admin/good/create') }}"> 
                                    新增
                                    <i class="fa fa-plus"></i>

                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" class="group-checkable"/> </th>
                            <th>商品名称</th>
                            <th>商品描述</th>
                            <th>价格</th>
                            <th>优惠价</th>
                            <th>图片</th>
                            <th>库存</th>
                            <th>品牌</th>
                            <th>所属分类</th>
                            <th>创建者</th>
                            <th>创建时间</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($goods as $good)
                            <tr class="odd gradeX">
                                <td>
                                    <input type="checkbox" class="checkboxes" value="1" /> </td>
                                <td>{{ $good->good_name }}</td>
                                <td>{{ $good->good_summary }}</td>
                                <td>{{ $good->good_price }}</td>
                                <td>{{ $good->good_sales }}</td>
                                <td>{{ $good->good_image }}</td>
                                <td>{{ $good->good_stock }}</td>
                                <td>{{ $good->brand_id }}</td>
                                <td>{{ $good->cid }}</td>
                                <td>{{ $good->uid }}</td>
                                <td>{{ date('Y-m-d H:i:s', $good->add_time) }}</td>
                                <td>
                                    <div class="am-btn-toolbar">
                                        {!! Form::open(array('action'=>array('Admin\GoodController@destroy',$good->id),'method'=>'DELETE')) !!}
                                        
                                         <a href="{{ action('Admin\GoodController@edit',array('id'=>$good->id)) }}" >
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