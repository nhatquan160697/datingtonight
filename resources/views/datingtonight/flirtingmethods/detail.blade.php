@extends('templates.datingtonight.master')
@section('title')
	{{ $getIdItem->name_flirting }}
@endsection
@section('content')
	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="{{route('datingtonight.index.index')}}">Flirting Methods</a>
		</li>
		<li class="breadcrumb-item">
			<a style="color:#910745" href="{{route('datingtonight.flirtingmethods.index')}}">{{ $getIdItem->name_flirting }}</a>
		</li>
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
									<img src="/storage/app/files/flirtingmethods/{{ $getIdItem->image }}" class="img-fluid" alt="">
								</a>
							</div>
							<div class="blog-info-middle">
								<ul>
									@php
										$date_int = strtotime($getIdItem->date_created);
										//$date_format = date('d-month-Y',$date_int);
										//dd($date_int);
										$date_array = getdate($date_int);
										//dd($date_array);
										$month = $date_array['month'];
										$day = $date_array['mday'];
										$year = $date_array['year'];
									@endphp
									<li>
										<a href="">
											<i class="far fa-calendar-alt"></i> {{ $month }} {{ $day }},{{ $year }}</a>
									</li>
									<li class="mx-2">
										<a href="">
											<i class="fas fa-eye"></i>{{ $getIdItem->count_number }}</a>
									</li>
									<li>
										<a href="">
											 <i class="fa fa-user-secret"></i> {{ $getIdItem->author }}</a>
									</li>

								</ul>
							</div>
						</div>
						<h2 style="margin-bottom: 10px; margin-top: 5px;">{{ $getIdItem->name_flirting }}</h2>
						<h3>
							<a href="">{!! $getIdItem->preview_text !!}</a>
						</h3>
						<p>{!! $getIdItem->detail_flirting !!}</p>
						<strong>Author : {{ $getIdItem->author }}</strong>
					</div>
					<!-- Comment -->
					@include('datingtonight.flirtingmethods.comment')
					<!--/Comment-->
				</div>

				<!--//left-->
				<!--right-->
				@include('datingtonight.flirtingmethods.related')
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

	{{-- Comment --}}
	<script>
		$(document).ready(function(){
		    $("#clickme").click(function(){
		        $("#reply-comment").slideToggle();
		    });
		});
	</script>
	<!--/Comment-->

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