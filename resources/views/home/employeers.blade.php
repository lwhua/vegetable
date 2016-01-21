@extends('home.base')

@section('title', '团队成员')

@section('content')
   
<!-- Portfolio Starts Here -->
	<div class="portfolios entertain_box  wow fadeInUp" data-wow-delay="0.4s" id="project">
		<div class="container">
			<div class="portfolio-top">
			<h3> OUR EMPLOYEERS</h3>
					<div id="portfoliolist">
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="images/p11.png" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
						     <img src="images/p1.png" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/add.png" alt=""/></h2>
						  	 </div></a>
		                </div>
		                <div class ="small-text">
		                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Pellentesque eu erat lacus, consectetur</p> 
		                </div>
					</div>				
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="images/p21.png" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
						     <img src="images/p2.png" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/add.png" alt=""/></h2>
						  	 </div></a>

		                </div>
		                <div class ="small-text">
		                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Pellentesque eu erat lacus, consectetur</p> 
		                </div>
					</div>		
					<div class="portfolio photo mix_all" data-cat="photo" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="images/p31.png" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
						     <img src="images/p3.png" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/add.png" alt=""/></h2>
						  	 </div></a>
		                </div>
		                <div class ="small-text">
		                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Pellentesque eu erat lacus, consectetur</p> 
		                </div>

					</div>				
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="images/p41.png" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
						     <img src="images/p4.png" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/add.png" alt=""/></h2>
						  	 </div></a>
		                </div>
		                <div class ="small-text">
		                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Pellentesque eu erat lacus, consectetur</p> 
		                </div>
					</div>	
					<div class="portfolio photo mix_all" data-cat="photo" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="images/p51.png" class="b-link-stripe b-animate-go   swipebox"  title="Image Title">
						     <img src="images/p5.png" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/add.png" alt=""/></h2>
						  	 </div></a>
		                </div>
		                <div class ="small-text">
		                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Pellentesque eu erat lacus, consectetur</p> 
		                </div>
					</div>			
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper">		
							<a href="images/p61.png" class="b-link-stripe b-animate-go  swipebox"  title="Image Title">
						     <img src="images/p6.png" /><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img src="images/add.png" alt=""/></h2>
						  	 </div></a>
		                </div>
		                 <div class ="small-text">
		                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Pellentesque eu erat lacus, consectetur</p> 
		                </div>
					</div>		
		</div>
		</div>
	</div>
</div>
<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
		</script>
	<!-- Portfolio Ends Here -->
@endsection