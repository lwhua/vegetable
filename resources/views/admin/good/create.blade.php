@extends('layouts.master')
@section('title', '后台管理系统-权限管理')

@section('css')

<link href="{{asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />


@endsection('css')
@section('content')

<div class="container">
    <div class="row">
    {!! Form::open(array('action'=>array('Admin\GoodController@store'),'method'=>'POST','class'=>'form form-horizontal','id'=>'form_sample_3')) !!}
    <div class="form-body">
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
        <div class="alert alert-success display-hide">
            <button class="close" data-close="alert"></button> Your form validation is successful! </div>
        <div class="form-group">
            <label class="control-label col-md-3">商品名称
                <span class="required"> * </span>
            </label>
            <div class="col-md-4">
                <input type="text" name="name" data-required="1" class="form-control" /> </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">商品价格
                <span class="required"> * </span>
            </label>
            <div class="col-md-4">
                <input type="text" name="good_price" data-required="1" class="form-control" /> </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">促销价
                <span class="required"> * </span>
            </label>
            <div class="col-md-4">
                <input type="text" name="good_sales" data-required="1" class="form-control" /> </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3">Occupation&nbsp;&nbsp;</label>
            <div class="col-md-4">
                <input name="occupation" type="text" class="form-control" /> </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Select2 Dropdown
                <span class="required"> * </span>
            </label>
            <div class="col-md-4">
                <select class="form-control select2me" name="options2">
                    <option value="">Select...</option>
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                    <option value="Option 4">Option 4</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Datepicker</label>
            <div class="col-md-4">
                <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                    <input type="text" class="form-control" readonly name="datepicker">
                    <span class="input-group-btn">
                        <button class="btn default" type="button">
                            <i class="fa fa-calendar"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
                <span class="help-block"> select a date </span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Membership
                <span class="required"> * </span>
            </label>
            <div class="col-md-4">
                <div class="radio-list" data-error-container="#form_2_membership_error">
                    <label>
                        <input type="radio" name="membership" value="1" /> Fee </label>
                    <label>
                        <input type="radio" name="membership" value="2" /> Professional </label>
                </div>
                <div id="form_2_membership_error"> </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Services
                <span class="required"> * </span>
            </label>
            <div class="col-md-4">
                <div class="checkbox-list" data-error-container="#form_2_services_error">
                    <label>
                        <input type="checkbox" value="1" name="service" /> Service 1 </label>
                    <label>
                        <input type="checkbox" value="2" name="service" /> Service 2 </label>
                    <label>
                        <input type="checkbox" value="3" name="service" /> Service 3 </label>
                </div>
                <span class="help-block"> (select at least two) </span>
                <div id="form_2_services_error"> </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">商品简介</label>
            <div class="col-md-9">
                <textarea name="markdown" data-provide="markdown" rows="10" data-error-container="#editor_error"></textarea>
                <div id="editor_error"> </div>
            </div>
        </div>
        <div class="form-group last">
            <label class="control-label col-md-3">商品详情
                <span class="required"> * </span>
            </label>
            <div class="col-md-9">
                <textarea class="ckeditor form-control" name="editor2" rows="6" data-error-container="#editor2_error"></textarea>
                <div id="editor2_error"> </div>
            </div>
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn green">Submit</button>
                <button type="button" class="btn default">Cancel</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
    </div>
</div>
@endsection('content')

@section('script')
<script src="{{asset('assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/pages/scripts/form-validation.min.js')}}" type="text/javascript"></script>
@endsection('script')