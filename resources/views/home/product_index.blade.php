@extends('home.base')

@section('title', '首页')

@section('content')
	<div class="banner-in">
		<div class="container">
			<!-- <h6>HOME / <span>PRODUCTS</span></h6> -->
		</div>
	</div>
<!---->
	<div class="container">
		<div class="product">
			
		<ul id="filters">
				<li class="active"><span class="filter" data-filter="app card icon logo  web">ALL</span></li>
				<li><span class="filter" data-filter="app">CATEGORY1</span></li>
				<li><span class="filter" data-filter="card">CATEGORY2 </span></li>
				<li><span class="filter" data-filter="icon">CATEGORY3</span></li>
				<li><span class="filter" data-filter="logo">CATEGORY4</span></li>
			</ul>
			<div id="portfoliolist">
			<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper ">		
					<a href="single.html" class="b-link-stripe b-animate-go  thickbox play-icon">
				  <img class="img-responsive " src="images/p1.jpg" alt="" />
				   
				     <ul class="social-ic">
						<li class="down"><span> </span></li>
						<li class="in-search"><span> </span></li>
					</ul>
					</a>							
				</div>
			</div>				
			<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper">		
					<a href="single.html" class="b-link-stripe b-animate-go  thickbox play-icon ">
				    <img class="img-responsive" src="images/p2.jpg" alt=""  />
				    <ul class="social-ic">
						<li class="down"><span> </span></li>
						<li class="in-search"><span> </span></li>
					</ul>
					</a>
                </div>
			</div>		
			<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper">		
					<a href="single.html" class="b-link-stripe b-animate-go  thickbox play-icon ">
				     <img class="img-responsive" src="images/p3.jpg"  alt="" />
				      <ul class="social-ic">
						<li class="down"><span> </span></li>
						<li class="in-search"><span> </span></li>
					</ul>
					</a>
                </div>
			</div>				
			<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper ">		
					<a href="single.html" class="b-link-stripe b-animate-go  thickbox play-icon ">
				     <img class="img-responsive" src="images/p4.jpg" alt=""  />
				     <ul class="social-ic">
						<li class="down"><span> </span></li>
						<li class="in-search"><span> </span></li>
					</ul>
					</a>
                </div>
			</div>	
			<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper ">		
					<a href="single.html" class="b-link-stripe b-animate-go  thickbox play-icon ">
				     <img class="img-responsive" src="images/p1.jpg" alt=""  />
				     <ul class="social-ic">
						<li class="down"><span> </span></li>
						<li class="in-search"><span> </span></li>
					</ul>
					</a>
                </div>
			</div>			
			<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper">		
					<a href="single.html" class="b-link-stripe b-animate-go  thickbox play-icon ">
				     <img class="img-responsive" src="images/p2.jpg" alt=""  />
				    <ul class="social-ic">
						<li class="down"><span> </span></li>
						<li class="in-search"><span> </span></li>
					</ul>
					</a>
               </div>
			</div>
			<div class="portfolio logo mix_all " data-cat="logo" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper ">		
					<a href="single.html" class="b-link-stripe b-animate-go  thickbox play-icon ">
				     <img class="img-responsive" src="images/p3.jpg" alt=""  />
				     <ul class="social-ic">
						<li class="down"><span> </span></li>
						<li class="in-search"><span> </span></li>
					</ul>
					</a>
               </div>
			</div>
			<div class="portfolio logo mix_all" data-cat="logo" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper">		
					<a href="single.html" class="b-link-stripe b-animate-go  thickbox play-icon ">
				     <img class="img-responsive" src="images/p4.jpg" alt=""  />
				     <ul class="social-ic">
						<li class="down"><span> </span></li>
						<li class="in-search"><span> </span></li>
					</ul>
					</a>
               </div>
			</div>
			<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
				<div class="portfolio-wrapper port">		
					<a href="single.html" class="b-link-stripe b-animate-go  thickbox play-icon ">
				     <img class="img-responsive" src="images/p1.jpg" alt=""  />
				     
				     <ul class="social-ic">
						<li class="down"><span> </span></li>
						<li class="in-search"><span> </span></li>
					</ul>
					</a>
               </div>
			</div>
			
			<div class="clearfix"> </div>
			</div>	
	

		</div>
	</div>
@endsection
