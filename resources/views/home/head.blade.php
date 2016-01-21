<!DOCTYPE HTML>
<html>
<head>
<title>@yield('title')</title>
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/font.css') }}" rel="stylesheet" type="text/css" media="all" />  
<!--theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Vegetables" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="{{ asset('js/jquery.easydropdown.js') }}"></script>

@yield('style')


</head>
<body>
    <!--header-->
    <div class="header">
        <div class="container">
            <div class="header-top">            
                <div class="logo">
                    <a href="/"><img src="{{ asset('images/logo.png') }}" alt=" " ></a>
                </div>
                <div class="search-in">
                    <div class="header-grid">
                        <ul>
                            <li class="in-up" ><a href="{{url('signin')}}" class="scroll"> 登 录 </a> <label>|</label></li>
                            <li ><a href="{{url('signup')}}" class="scroll">注 册</a><label>|</label></li>
                            <li class="in-up" ><a href="{{url('contact')}}" class="scroll">联系我们</a></li>                     
                        </ul>
                </div>
                <div class="search-top">
                    <div class="search">
                    <form>
                        <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}" >
                        <input type="submit"  value="">
                    </form>
                </div>
                <div class="cart">
                    <a href="/shopcart" class="cart-in"> </a>
                    <span> 5</span>
                </div>
                <div class="clearfix"> </div>
                </div>
            </div>  
            <div class="clearfix"> </div>
            </div>
            <div class="header-bottom-bottom">
                <div class="top-nav">
                    <span class="menu"> </span>
                    <ul>
                        
                        <li @if(Request::url() == url('product')) class="active" @endif><a href="{{url('product')}}" > 商品中心 </a></li>
                        <li @if(Request::url() == url('services')) class="active" @endif><a href="{{url('services')}}" > 服务中心 </a></li>
                        <li @if(Request::url() == url('blog/daily')) class="active" @endif><a href="{{url('blog/daily')}}" > 每日一报 </a></li>
                        <li @if(Request::url() == url('blog')) class="active" @endif><a href="{{url('blog')}}" > 健康知识 </a></li>
                        <li @if(Request::url() == url('about')) class="active" @endif><a href="{{url('about')}}"> 关于我们 </a></li>
                        <!-- <li @if(Request::url() == url('contact')) class="active" @endif><a href="{{url('contact')}}" > 联系我们 </a></li> -->
                    </ul>   
                <script>
                    $("span.menu").click(function(){
                        $(".top-nav ul").slideToggle(500, function(){
                        });
                    });
                </script>           
                </div>  
                <div class="clearfix"> </div>
                </div>
        </div>
    </div>