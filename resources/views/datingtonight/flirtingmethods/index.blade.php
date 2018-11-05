@extends('templates.datingtonight.master')
@section('title')
	Flirting methods
@endsection
@section('content')
	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.html">Dating Tonight</a>
		</li>
		<li class="breadcrumb-item" style="color:#910745">Flirting methods</li>
	</ol>
	<!--//banner-->

	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<h3 class="tittle">FLIRTING METHODS</h3>
			<div class="row inner-sec">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					
						<!-- FLIRTING METHOD LIST -->
						@foreach($flirtingmethods as $fm)
						<?php
                        	$url='/storage/app/files/flirtingmethods/'.$fm->image;
                    	?>
						
							<a href="{{route('datingtonight.flirtingmethods.detail',['slug' => str_slug($fm->name_flirting), 'id' => $fm->id])}}">
								<img src="{{$url}}" class="card-img-top img-fluid" alt="This is an image">
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
											<i class="fas fa-eye"></i> {{$fm->count_number}} Views</a>
									</li>

								</ul>
								<h5 class="card-title ">
									<a href="{{route('datingtonight.flirtingmethods.detail',['slug' => str_slug($fm->name_flirting), 'id' => $fm->id])}}">{{$fm->name_flirting}}</a>
								</h5>
								<?php
									$preview_text=str_limit($fm->preview_text,100);
								?>
								<p class="card-text mb-3">{{$preview_text}}</p>
								<a href="{{route('datingtonight.flirtingmethods.detail',['slug' => str_slug($fm->name_flirting), 'id' => $fm->id])}}" class="btn btn-primary read-m">Read More</a>
							</div>
						
						@endforeach
					
					{{$flirtingmethods->links()}}
				</div>
				<!--//left-->
				<!--right-->
				@include('datingtonight.flirtingmethods.right-bar')
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