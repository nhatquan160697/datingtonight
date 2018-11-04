@extends('templates.datingtonight.master')
@section('title')
	{{ $getItem->name_place }}
@endsection
@section('content')
<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.html">Dating Place</a>
		</li>
		<li class="breadcrumb-item" style="color:#910745">{{ $getItem->name_place }}</li>
	</ol>

	<!--//banner-->
	<section class="banner-bottom">
		<!--/blog-->
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<div class="blog-grid-top">
						<div class="b-grid-top">
							<div class="blog_info_left_grid">
								<a href="">
									<img src="/storage/app/files/datingplaces/{{ $getItem->picture }}" class="img-fluid" alt="">
								</a>
							</div>
							<div class="blog-info-middle">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> FEB 15,2018</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-thumbs-up"></i>{{ $getItem->count_number }}</a>
									</li>
									<li>
										<a href="#">
											<i class="far fa-comment"></i> 0 Comments</a>
									</li>

								</ul>
							</div>
						</div>
						<h2 style="margin-bottom: 10px; margin-top: 5px;">{{ $getItem->name_place }}</h2>
						<h3>
							<a href="">{!! $getItem->preview_text !!}</a>
						</h3>
						<p>{!! $getItem->detail_place !!}</p>
					</div>
					<!-- Slides -->
					<!-- Slideshow container -->
					{{-- <div class="slideshow-container">
					  <!-- Full-width images with number and caption text -->
					  <div class="mySlides fade">
					    <div class="numbertext">1 / 5</div>
					    <img src="/storage/app/files/datingplaces/dating_place_picture/{{ $getPicture->picture1}}" style="width:100%">
					    <div class="text">{{ $getItem->name_place }}</div>
					  </div>

					  <div class="mySlides fade">
					    <div class="numbertext">2 / 5</div>
					    <img src="/storage/app/files/datingplaces/dating_place_picture/{{ $getPicture->picture2}}" style="width:100%">
					    <div class="text">{{ $getItem->name_place }}</div>
					  </div>

					  <div class="mySlides fade">
					    <div class="numbertext">3 / 5</div>
					    <img src="/storage/app/files/datingplaces/dating_place_picture/{{ $getPicture->picture3}}" style="width:100%">
					    <div class="text">{{ $getItem->name_place }}</div>
					  </div>

					  <div class="mySlides fade">
					    <div class="numbertext">4 / 5</div>
					    <img src="/storage/app/files/datingplaces/dating_place_picture/{{ $getPicture->picture4}}" style="width:100%">
					    <div class="text">{{ $getItem->name_place }}</div>
					  </div>

					  <div class="mySlides fade">
					    <div class="numbertext">5 / 5</div>
					    <img src="/storage/app/files/datingplaces/dating_place_picture/{{ $getPicture->picture3}}" style="width:100%">
					    <div class="text">{{ $getItem->name_place }}</div>
					  </div>

					  <!-- Next and previous buttons -->
					  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					  <a class="next" onclick="plusSlides(1)">&#10095;</a>
					</div>
					<!-- The dots/circles -->
					<div style="text-align:center">
					  <span class="dot" onclick="currentSlide(1)"></span>
					  <span class="dot" onclick="currentSlide(2)"></span>
					  <span class="dot" onclick="currentSlide(3)"></span>
					  <span class="dot" onclick="currentSlide(4)"></span>
					  <span class="dot" onclick="currentSlide(5)"></span>
					</div> --}}
					<!--/Slides -->
					<!-- Comment -->
					@include('datingtonight.datingplaces.comment')
					<!--/Comment-->
				</div>

				<!--//left-->
				<!--right-->
				@include('datingtonight.datingplaces.related')
				<!--//right-->
			</div>
		</div>
	</section>
	<!--//main-->
	<!---->
	<!-- js -->
	<script src="/templates/datingtonight/js/jquery-2.2.3.min.js"></script>
	<script src="/templates/datingtonight/formDatingPlaces/js/script.js"></script>
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