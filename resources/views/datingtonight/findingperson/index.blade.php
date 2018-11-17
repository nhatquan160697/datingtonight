@extends('templates.datingtonight.master')
@section('title')
	Flirting Methods - Dating Tonight
@endsection
@section('content')
	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="{{route('datingtonight.index.index')}}">Dating Tonight</a>
		</li>
		<li class="breadcrumb-item active">
			<a href="{{route('datingtonight.flirtingmethods.index')}}">Flirting methods</a>
		</li>
	</ol>
	<!--//banner-->

	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<h3 class="tittle">FLIRTING METHODS</h3>
			<div class="row inner-sec">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<div class="row mb-4">
						<!-- FLIRTING METHOD LIST -->up
						@foreach($user_properties as $up)
						<div class="col-md-6 card my-4">
							<a href="#">
								<img src="#" class="card-img-top img-fluid" alt="This is an image">
							</a>
							<div class="card-body">
								<ul class="blog-icons my-4">
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> Feb 23 .2018</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-comment"></i> 21</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-eye"></i> 2000</a>
									</li>

								</ul>
								<h5 class="card-title ">
									<a href="single.html">{{$up->Fullname}}</a>
								</h5>
								<p class="card-text mb-3">{{$up->id}}</p>
								<a href="single.html" class="btn btn-primary read-m">Read More</a>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<!--//left-->
				<!--right-->
				<aside class="col-lg-4 agileits-w3ls-right-blog-con text-left">
					<div class="right-blog-info text-left">
						<div class="tech-btm">
							<img src="images/banner1.jpg" class="card-img-top img-fluid" alt="">
						</div>
						<div class="tech-btm">
							<h4>Sign up to our newsletter</h4>
							<p>Pellentesque dui, non felis. Maecenas male </p>
							<form action="#" method="post">
								<input type="email" placeholder="Email" required="">
								<input type="submit" value="Subscribe">
							</form>

						</div>
						<div class="tech-btm">
							<h4>Categories</h4>
							<ul class="list-group single">
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Cras justo odio
									<span class="badge badge-primary badge-pill">14</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Dapibus ac facilisis in
									<span class="badge badge-primary badge-pill">2</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Morbi leo risus
									<span class="badge badge-primary badge-pill">1</span>
								</li>
							</ul>
						</div>
						<div class="tech-btm">
							<h4>Top stories of the week</h4>

							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/1.jpg" class="card-img-top img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">

									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Jan, 2018</span>
									</div>
								</div>

							</div>
							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/6.jpg" class="card-img-top img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">
									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Feb, 2018</span>
									</div>
								</div>

							</div>
						</div>
						<div class="single-gd my-5 tech-btm">
							<h4>Our Progress</h4>
							<div class="progress">
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0"
								    aria-valuemax="100"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
								    aria-valuemax="100"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
								    aria-valuemax="100"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
								    aria-valuemax="100"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
								    aria-valuemax="100"></div>
							</div>
						</div>
						<div class="single-gd tech-btm text-left">
							<h4>Recent Post</h4>
							<div class="blog-grids">
								<div class="blog-grid-left">
									<a href="single.html">
										<img src="images/b1.jpg" class="card-img-top img-fluid" alt="">
									</a>
								</div>
								<div class="blog-grid-right">

									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male</a>
									</h5>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
				


					<div class="tech-btm widget_social text-left">
						<h4>Stay Connect</h4>
						<ul>

							<li>
								<a class="twitter" href="#">
									<i class="fab fa-twitter"></i>
									<span class="count">317K</span> Twitter Followers</a>
							</li>
							<li>
								<a class="facebook" href="#">
									<i class="fab fa-facebook-f"></i>
									<span class="count">218k</span> Twitter Followers</a>
							</li>
							<li>
								<a class="dribble" href="#">
									<i class="fab fa-dribbble"></i>

									<span class="count">215k</span> Dribble Followers</a>
							</li>
							<li>
								<a class="pin" href="#">
									<i class="fab fa-pinterest"></i>
									<span class="count">190k</span> Pinterest Followers</a>
							</li>

						</ul>
					</div>
					<div class="tech-btm">
						<h4>Recent Posts</h4>

						<div class="blog-grids row mb-3 text-left">
							<div class="col-md-5 blog-grid-left">
								<a href="single.html">
									<img src="images/1.jpg" class="card-img-top img-fluid" alt="">
								</a>
							</div>
							<div class="col-md-7 blog-grid-right">

								<h5>
									<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
								</h5>
								<div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> 20 Jan, 2018</span>
								</div>
							</div>

						</div>
						<div class="blog-grids row mb-3 text-left">
							<div class="col-md-5 blog-grid-left">
								<a href="single.html">
									<img src="images/5.jpg" class="card-img-top img-fluid" alt="">
								</a>
							</div>
							<div class="col-md-7 blog-grid-right">

								<h5>
									<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
								</h5>
								<div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> 20 Jan, 2018</span>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids row mb-3 text-left">
							<div class="col-md-5 blog-grid-left">
								<a href="single.html">
									<img src="images/3.jpg" class="card-img-top img-fluid" alt="">
								</a>
							</div>
							<div class="col-md-7 blog-grid-right">
								<h5>
									<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
								</h5>
								<div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> 20 Feb, 2018</span>
								</div>
							</div>

						</div>
					</div>
				</div>
				</aside>
				<!--//right-->
				</div>
			</div>
	</section>
	<!--//main-->
	<!-- js -->
	<script src="/templates/datingtonight/js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!--/ start-smoth-scrolling -->
	<script src="/templates/datingtonight/js/move-top.js"></script>
	<script src="/templates/datingtonight/js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!--// end-smoth-scrolling -->

	<script>
		$(document).ready(function () {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

	<!-- //Custom-JavaScript-File-Links -->
	<script src="/templates/datingtonight/js/bootstrap.js"></script>


</body>

</html>
@endsection