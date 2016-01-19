@extends('home.base')

@section('title', '首页')

@section('content')
	<div class="banner">
			<!-- Slideshow 4 -->
		    <div  id="top" class="callbacks_container">
		      <ul class="rslides" id="slider">
		        <li>
		          <img src="images/banner.jpg" alt="" />
				  <div class="banner-matter">
					<div class="price">
					  <h2>We Got Every Vegetable  in Your price</h2>
					  </div>
						<div class="banner-para">							
							<p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
						</div>
				  </div>
		        </li>
		        <li>
		          <img src="images/banner2.jpg" alt="" />
				  <div class="banner-matter">
					 <div class="price">
					  <h2>We Got Every Vegetable  in Your price</h2>
					  </div>
						<div class="banner-para">							
							<p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
						</div>
				  </div>
		        </li>
		        <li>
		          <img src="images/banner.jpg" alt="" />
				  <div class="banner-matter">
					 <div class="price">
					  <h2>We Got Every Vegetable  in Your price</h2>
					  </div>
						<div class="banner-para">
							
							<p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
						</div>
				  </div>
		        </li>
		      </ul>
		    </div>
		</div>				
		
		<!--content-->
		<div class="content">
			<div class="container">
			<div class="top-content">
				<div class="content-top">
					<div class="col-md-3 look">
						<h4><a href="single.html">Internet tend to repeat </a></h4>
						<a href="single.html"><img class="img-responsive" src="images/pi.jpg" alt=" " ></a>
						<p>content here', making it look like readable English. Many desktop publishing packages </p>
						<a href="single.html" class="btn  btn-1c">Learn More</a>
					</div>
					<div class="col-md-3 look">
						<h4><a href="single.html">Internet tend to repeat </a></h4>
						<a href="single.html"><img class="img-responsive" src="images/pi1.jpg" alt=" " ></a>
						<p>content here', making it look like readable English. Many desktop publishing packages </p>
						<a href="single.html" class="btn  btn-1c">Learn More</a>
					</div>
					<div class="col-md-3 look">
						<h4><a href="single.html">Internet tend to repeat </a></h4>
						<a href="single.html"><img class="img-responsive" src="images/pi2.jpg" alt=" " ></a>
						<p>content here', making it look like readable English. Many desktop publishing packages </p>
						<a href="single.html" class="btn  btn-1c">Learn More</a>
					</div>
					<div class="col-md-3 look">
						<h4><a href="single.html">Internet tend to repeat </a></h4>
						<a href="single.html"><img class="img-responsive" src="images/pi3.jpg" alt=" " ></a>
						<p>content here', making it look like readable English. Many desktop publishing packages </p>
						<a href="single.html" class="btn  btn-1c">Learn More</a>
					</div>
					<div class="clearfix"> </div>
					</div>			
					<div class="content-top">
					<div class="col-md-3 look">
						<h4><a href="single.html">Internet tend to repeat </a></h4>
						<a href="single.html"><img class="img-responsive" src="images/pi4.jpg" alt=" " ></a>
						<p>content here', making it look like readable English. Many desktop publishing packages </p>
						<a href="single.html" class="btn  btn-1c">Learn More</a>
					</div>
					<div class="col-md-3 look">
						<h4><a href="single.html">Internet tend to repeat </a></h4>
						<a href="single.html"><img class="img-responsive" src="images/pi5.jpg" alt=" " ></a>
						<p>content here', making it look like readable English. Many desktop publishing packages </p>
						<a href="single.html" class="btn  btn-1c">Learn More</a>
					</div>
					<div class="col-md-3 look">
						<h4><a href="single.html">Internet tend to repeat </a></h4>
						<a href="single.html"><img class="img-responsive" src="images/pi6.jpg" alt=" " ></a>
						<p>content here', making it look like readable English. Many desktop publishing packages </p>
						<a href="single.html" class="btn  btn-1c">Learn More</a>
					</div>
					<div class="col-md-3 look">
						<h4><a href="single.html">Internet tend to repeat </a></h4>
						<a href="single.html"><img class="img-responsive" src="images/pi7.jpg" alt=" " ></a>
						<p>content here', making it look like readable English. Many desktop publishing packages </p>
						<a href="single.html" class="btn  btn-1c">Learn More</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				</div>
			</div>
			<!---->
			<!---->
			 <div class="content-bottom-top">
				<div class="wmuSlider example1">
					   <div class="wmuSliderWrapper">
						   <article style="position: absolute; width: 100%; opacity: 0;">
						   	<div class="content-bottom">
								<div class="container">
									<span class="corn"> </span>
									<h3>Do you Know  ?</h3>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
								</div>
							</div>
						 	</article>
						 	 <article style="position: absolute; width: 100%; opacity: 0;">
						 	 		<div class="content-bottom">
								<div class="container">
									<span class="corn corn-in"> </span>
									<h3>Do you Know  ?</h3>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
								</div>
							</div>
						 	</article>
						 	 <article style="position: absolute; width: 100%; opacity: 0;">
						 	 		<div class="content-bottom">
								<div class="container">
									<span class="corn"> </span>
									<h3>Do you Know  ?</h3>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
								</div>
							</div>
						 	</article>
						 </div>
		                       	         
				</div>
			</div>
			
		</div>
@endsection

@section('script')

	<script src="{{asset('js/responsiveslides.min.js')}}"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			speed: 500,
			namespace: "callbacks",
			pager: true,
		  });
		});
	</script>
	<script src="{{asset('js/jquery.wmuSlider.js')}}"></script> 
	<script>
		$('.example1').wmuSlider();         
	</script> 	
@endsection