@extends('layouts.master')
@section('title', '后台管理系统-权限管理')

@section('css')

<link href="{{asset('assets/global/plugins/jstree/dist/themes/default/style.min.css')}}" rel="stylesheet" type="text/css" />
@endsection('css')
@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="portlet blue-chambray box">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>商品分类管理 </div>

                <div class="tools">
                    <button type="button" class="btn dark" onclick="saveCategory();">保存</button>
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="javascript:;" class="remove"> </a>

                </div>
            </div>
            <div class="portlet-body">
                {!! Form::open(array('action'=>array('Admin\CategoryController@store'),'method'=>'POST','class'=>'form form-horizontal','id'=>'category')) !!}
                {!! Form::hidden('node_val',null,array('id'=>'node_val')) !!}
                <div id="tree_1" class="tree-demo"> </div>
                {!! Form::close() !!}
                <div class="alert alert-success no-margin margin-top-10">编辑完后请点击上方保存按钮保存</div>
                
            </div>
        </div>
    </div>
    


    <div class="col-md-6">
        <div class="portlet blue-chambray box">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>商品品牌管理 </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
                <div id="tree_2" class="tree-demo"> </div>
                <div class="alert alert-success no-margin margin-top-10"></div>
            </div>
        </div>
    </div>

</div>




<div class="row">
    <div class="col-md-6">
        
        <div class="portlet blue-chambray box">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>供应商管理 </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                    <a href="javascript:;" class="reload"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">

                <div id="tree_3" class="tree-demo"> </div>
                <div class="alert alert-success no-margin margin-top-10"></div>
                
            </div>
        </div>

    </div>
    
    

</div>
@endsection('content')

@section('script')
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jstree/dist/jstree.min.js')}}" type="text/javascript"></script>
<!-- <script src="{{asset('assets/pages/scripts/ui-tree.min.js')}}" type="text/javascript"></script> -->
<script type="text/javascript">

    $('document').ready(function(){
        $("#tree_1").jstree({
            core: {
                themes: {
                    responsive: !1
                },
                check_callback: !0,
                data: {!! $data['category'] !!}
            },
            types: {
                "default": {
                    icon: "fa fa-folder icon-state-warning icon-lg"
                },
                file: {
                    icon: "fa fa-file icon-state-warning icon-lg"
                }
            },
            state: {
                key: "demo2"
            },
            plugins: ["contextmenu", "dnd", "state", "types"]
        });
    });

    var tree = {};
    function saveCategory(){
        var node = $.jstree.reference('#tree_1').get_json($('#tree_1 #0_anchor'),{no_data:true,no_state:true,flat:true});
        
        $('#node_val').val(JSON.stringify(node));
        $('#category').submit();
    }

    
    

</script>
@endsection('script')