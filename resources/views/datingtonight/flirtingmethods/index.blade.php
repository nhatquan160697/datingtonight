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
			<a href="{{ route('datingtonight.index.index') }}">Dating Tonight</a>
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
					<div class="row mb-4">
						@foreach($flirtingmethods as $fm)
						@php
							$id = $fm->id;
							$name = $fm->name_flirting;
							$slug = str_slug($name);
							$image = $fm->image;
							$preview = str_limit($fm->preview_text,150);
							$date_created = $fm->date_created;
							$count = $fm->count_number;
							$urlDetail = route('datingtonight.flirtingmethods.detail',['slug' => $slug, 'id' => $id]) ;
						@endphp
						<div class="col-md-6 card">
							<a href="{{ $urlDetail }}">
								@if($image != '')
	                            @php
	                                $urlImg = '/storage/app/files/flirtingmethods/'.$image;
	                            @endphp
								<img style="height: 268px" src="{{ $urlImg }}" class="img-fluid" alt="">
								@endif
							</a>
							<div class="card-body">
								<ul class="blog-icons my-4">
									@php
										$date_int = strtotime($date_created);
										//$date_format = date('d-month-Y',$date_int);
										//dd($date_int);
										$date_array = getdate($date_int);
										//dd($date_array);
										$month = $date_array['month'];
										$day = $date_array['mday'];
										$year = $date_array['year'];
									@endphp
									<li>
										<a href="{{ $urlDetail }}">
											<i class="far fa-calendar-alt"></i> {{ $month }} {{ $day }},{{ $year }}</a>
									</li>
									<li>
										<a href="#">
											<i style="padding-right: 5px;" class="fas fa-eye"> </i>{{ $count }} </a>
									</li>

								</ul>
								<h5 class="card-title ">
									<a href="{{ $urlDetail }}">{{ $name }}</a>
								</h5>
								<p class="card-text mb-3">{{ $preview }} </p>
								<a href="{{ $urlDetail }}" class="btn btn-primary read-m">Read More</a>
							</div>
						</div>
						@endforeach
					</div>
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