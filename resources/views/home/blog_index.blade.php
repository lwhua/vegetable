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
		<div class="blog">
		<div class="blog-top">
			<div class="col-md-4 top-blog">
				<a href="single.html"><img class="img-responsive" src="images/b1.jpg" alt=" " ></a>
			</div>
			<div class="col-md-8 sed-in">
				<h4><a href="single.html">SED LOREET ALIQUAM LEOTELLUS DOLOR DAPIBUS</a></h4>				
					<ul>
						<li><a href="#"><span> <i> </i>Super user</span> </a> </li>
  						 <li><span><i class="clock"> </i>June 14, 2013</span></li>		  						 	
  						 <li><span><i class="hit"> </i>Hits:145</span></li>
  					</ul>		  						
				<p>Cras consequat iaculis lorem, id vehicula erat mattis quis. Vivamus laoreet velit justo, in ven e natis purus pretium sit amet. Praesent lectus tortor, tincidu nt in consectetur vestibulum, ultrices nec neque. Praesent nec sagittis mauris. Fusce convallis nunc neque. Integer egestas aliquam interdum. Nulla ante diam, interdum nec tempus eu, feugiat vel erat. Integer aliquam mi quis accum san porta.
				Quisque nec turpis nisi. Proin lobortis nisl ut orci euismod, et lobortis est scelerisque. Sed eget volutpat ipsum. Integer fring illa leo porttitor, ultrices quam non, lobortis ligula. Aliquam vel consequat arcu.</p>
				<a href="single.html" class="btn  btn-1c">Learn More</a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="blog-top">
			<div class="col-md-4 top-blog">
				<a href="single.html"><img class="img-responsive" src="images/b2.jpg" alt=" " ></a>
			</div>
			<div class="col-md-8 sed-in">
				<h4><a href="single.html">SED LOREET ALIQUAM LEOTELLUS DOLOR DAPIBUS</a></h4>					
					<ul>
						<li><a href="#"><span><i> </i>Super user</span></a></li>
  						 <li><span><i class="clock"> </i>June 14, 2013</span></li>		  						 	
  						 <li><span><i class="hit"> </i>Hits:145</span></li>
  					</ul>		  						
				<p>Cras consequat iaculis lorem, id vehicula erat mattis quis. Vivamus laoreet velit justo, in ven e natis purus pretium sit amet. Praesent lectus tortor, tincidu nt in consectetur vestibulum, ultrices nec neque. Praesent nec sagittis mauris. Fusce convallis nunc neque. Integer egestas aliquam interdum. Nulla ante diam, interdum nec tempus eu, feugiat vel erat. Integer aliquam mi quis accum san porta.
				Quisque nec turpis nisi. Proin lobortis nisl ut orci euismod, et lobortis est scelerisque. Sed eget volutpat ipsum. Integer fring illa leo porttitor, ultrices quam non, lobortis ligula. Aliquam vel consequat arcu.</p>
				<a href="single.html" class="btn  btn-1c">Learn More</a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="blog-top">
			<div class="col-md-4 top-blog">
				<a href="single.html"><img class="img-responsive" src="images/b3.jpg" alt=" " ></a>
			</div>
			<div class="col-md-8 sed-in">
				<h4><a href="single.html">SED LOREET ALIQUAM LEOTELLUS DOLOR DAPIBUS</a></h4>						
					<ul>
						<li><a href="#"><span><i> </i>Super user</span></a></li>
  						 <li><span><i class="clock"> </i>June 14, 2013</span></li>		  						 	
  						 <li><span><i class="hit"> </i>Hits:145</span></li>
  					</ul>		  						
				<p>Cras consequat iaculis lorem, id vehicula erat mattis quis. Vivamus laoreet velit justo, in ven e natis purus pretium sit amet. Praesent lectus tortor, tincidu nt in consectetur vestibulum, ultrices nec neque. Praesent nec sagittis mauris. Fusce convallis nunc neque. Integer egestas aliquam interdum. Nulla ante diam, interdum nec tempus eu, feugiat vel erat. Integer aliquam mi quis accum san porta.
				Quisque nec turpis nisi. Proin lobortis nisl ut orci euismod, et lobortis est scelerisque. Sed eget volutpat ipsum. Integer fring illa leo porttitor, ultrices quam non, lobortis ligula. Aliquam vel consequat arcu.</p>
				<a href="single.html" class="btn  btn-1c">Learn More</a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<ul class="start">
			<li><span>Start</span></li>
			<li><span>Prev</span></li>
			<li><span>1</span></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">Next</a></li>
			<li><a href="#">End</a></li>
		</ul>
	</div>
		
</div>
@endsection

@section('script')
<!-- Script for gallery Here -->
	<script type="text/javascript" src="{{asset('js/jquery.mixitup.min.js')}}"></script>
		<script type="text/javascript">
		$(function () {
			
			var filterList = {
			
				init: function () {
				
					// MixItUp plugin
					// http://mixitup.io
					$('#portfoliolist').mixitup({
						targetSelector: '.portfolio',
						filterSelector: '.filter',
						effects: ['fade'],
						easing: 'snap',
						// call the hover effect
						onMixEnd: filterList.hoverEffect()
					});				
				
				},
				
				hoverEffect: function () {
				
					// Simple parallax effect
					$('#portfoliolist .portfolio').hover(
						function () {
							$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
						},
						function () {
							$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
						}		
					);				
				
				}
	
			};
			
			// Run the show!
			filterList.init();
			
			
		});	
		</script>
<!-- Gallery Script Ends -->	
@endsection