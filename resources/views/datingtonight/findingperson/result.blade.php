@extends('templates.datingtonight.master')
@section('title')
	Find Your Suitable Person- Dating Tonight
@endsection
@section('content')
	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.html">Dating Tonight</a>
		</li>
		<li class="breadcrumb-item" style="color:#910745">Result</li>
	</ol>
	<!--//banner-->

	<!--/main-->
<section class="main-content-w3layouts-agileits">
		<div class="container">
			<h3 class="tittle">Result</h3>
			<div class="inner-sec">
				<!--left-->
				<div class="left-blog-info-w3layouts-agileits text-left">
					<div class="row">
						@forelse($Users as $up)
						<?php
                        	$url='/storage/app/files/avatar/'.$up->Avatar;
                        	$Gender;
                        	$City;
                        	$Constellation;
                        	$Drinking;
                        	$Educational;
                        	$EyeColor;
                        	$HairColor;
                        	$HairLength;
                        	$HairStyle;
                        	$HaveChildren;
                        	$HouseType;
                        	$JobStatus;
                        	$Language;
                        	$LiveWith;
                        	$National;
                        	$Religion;
                        	$Smoking;
                        	$Body;
                        	foreach ($gender as $gd) 
                        	{
                        		if ($gd->id==$up->Gender) {
                        			$Gender=$gd->gender;
                        		}
                        	}
                        	foreach ($city as $ct) 
                        	{
                        		if ($ct->id==$up->City) {
                        			$City=$ct->city;
                        		}
                        	}
                        	foreach ($constellation as $cs) 
                        	{
                        		if ($cs->id==$up->Constellation) {
                        			$Constellation=$cs->constellation;
                        		}
                        	}
                        	foreach ($drinking as $dr) 
                        	{
                        		if ($dr->id==$up->Drinking) {
                        			$Drinking=$dr->drink;
                        		}
                        	}
                        	foreach ($educational_level as $el) 
                        	{
                        		if ($el->id==$up->Educational_level) {
                        			$Educational=$el->level;
                        		}
                        	}
                        	foreach ($eye_color as $ec) 
                        	{
                        		if ($ec->id==$up->Eye_color) {
                        			$EyeColor=$ec->color;
                        		}
                        	}
                        	foreach ($hair_color as $hc) 
                        	{
                        		if ($hc->id==$up->Hair_color) {
                        			$HairColor=$hc->color;
                        		}
                        	}
                        	foreach ($hair_length as $hl) 
                        	{
                        		if ($hl->id==$up->Hair_length) {
                        			$HairLength=$hl->length;
                        		}
                        	}
                        	foreach ($hair_style as $hs) 
                        	{
                        		if ($hs->id==$up->Hair_style) {
                        			$HairStyle=$hs->style;
                        		}
                        	}
                        	foreach ($have_children as $hc) 
                        	{
                        		if ($hc->id==$up->Have_children) {
                        			$HaveChildren=$hc->children;
                        		}
                        	}
                        	foreach ($house_type as $ht) 
                        	{
                        		if ($ht->id==$up->Home_type) {
                        			$HouseType=$ht->type;
                        		}
                        	}
                        	foreach ($job_status as $js) 
                        	{
                        		if ($js->id==$up->Job_status) {
                        			$JobStatus=$js->status;
                        		}
                        	}
                        	foreach ($language as $lg) 
                        	{
                        		if ($lg->id==$up->Language) {
                        			$Language=$lg->language;
                        		}
                        	}
                        	foreach ($live_with as $lw) 
                        	{
                        		if ($lw->id==$up->Live_with) {
                        			$LiveWith=$lw->livewith;
                        		}
                        	}
                        	foreach ($national as $na) 
                        	{
                        		if ($na->id==$up->National) {
                        			$National=$na->national;
                        		}
                        	}
                        	foreach ($religion as $rl) 
                        	{
                        		if ($rl->id==$up->Religion) {
                        			$Religion=$rl->religion;
                        		}
                        	}
                        	foreach ($smoking as $sm) 
                        	{
                        		if ($sm->id==$up->Smoking) {
                        			$Smoking=$sm->smoke;
                        		}
                        	}
                        	foreach ($body as $bd) 
                        	{
                        		if ($bd->id==$up->Body) {
                        			$Body=$bd->body;
                        		}
                        	}                    	
                        ?>
						<div class="col-lg-4 card">
							<a href="#exampleModal-{{$up->id}}" data-toggle="modal">
								<img src="{{$url}}" class="card-img-top img-fluid" alt="This is an image">
							</a>
							<div class="card-body">
								
								<h5 class="card-title">
									<a href="#">{{$up->Fullname}}</a>
								</h5>
								<ul class="blog-icons my-4">
									<li>
											<i class="far fa-calendar-alt">{{$up->Birthdate}}</i>
									</li>
									<li>
											<span>{{$Gender}}</span>
											<span>{{$City}}</span>
									</li>
								</ul>
							</div>

							<!--Modal-->
							<div class="modal" id="exampleModal-{{$up->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
  								<div class="modal-dialog modal-dialog-centered" role="document">
    								<div class="modal-content">
      									<div class="modal-header">
        									<h5 class="modal-title" id="exampleModalLabel">{{$up->Fullname}}</h5>
        									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          									<span aria-hidden="true">&times;</span>
       										 </button>
      									</div>
      									<div class="modal-body">
        									<img src="{{$url}}" class="card-img-top img-fluid" alt="This is an image">
        									<!-- button chat -->
        									<hr>
        									<button type="button" class="btn btn-primary">Chat</button>	

        									<!-- basic information -->
        									<hr>
        									<h1>Basic</h1>
        									<p style="font-weight: bold;">Gender : <span>{{$Gender}}</span></p>
        									<p style="font-weight: bold;">City : <span>{{$City}}</span></p>
        									<p style="font-weight: bold;">Birthdate : <span>{{$up->Birthdate}}</span></p>
        									<p style="font-weight: bold;">Phone number : <span>{{$up->phone_number}}</span></p>
        									<p style="font-weight: bold;">Email : <span>{{$up->email}}</span></p>
        									<p style="font-weight: bold;">Facebook : <span>{{$up->Facebook}}</span></p>

        									<!-- Appearance -->
        									<hr>
        									<h1>Appearance</h1>
        									<p style="font-weight: bold;">Hair color : <span>{{$HairColor}}</span></p>
        									<p style="font-weight: bold;">Hair style : <span>{{$HairStyle}}</span></p>
        									<p style="font-weight: bold;">Hair length : <span>{{$HairLength}}</span></p>
        									<p style="font-weight: bold;">Eye color : <span>{{$EyeColor}}</span></p>
        									<p style="font-weight: bold;">Body : <span>{{$Body}}</span></p>
        									<p style="font-weight: bold;">Height : <span>{{$up->Height}} cm</span></p>
        									<p style="font-weight: bold;">Weight : <span>{{$up->Weight}} kg</span></p>	

        									<!-- Life style -->
        									<hr>
        									<h1>Life</h1>
        									<p style="font-weight: bold;">Drinking : <span>{{$Drinking}}</span></p>
        									<p style="font-weight: bold;">Smoking : <span>{{$Smoking}}</span></p>
        									<p style="font-weight: bold;">Job status : <span>{{$JobStatus}}</span></p>
        									<p style="font-weight: bold;">House type : <span>{{$HouseType}}</span></p>
        									<p style="font-weight: bold;">Live with : <span>{{$LiveWith}}</span></p>
        									<p style="font-weight: bold;">Children : <span>{{$HaveChildren}}</span></p>

        									<!-- Culture -->
        									<hr>
        									<h1>Culture</h1>
        									<p style="font-weight: bold;">National : <span>{{$National}}</span></p>
        									<p style="font-weight: bold;">Educational level : <span>{{$Educational}}</span></p>
        									<p style="font-weight: bold;">Language : <span>{{$Language}}</span></p>
        									<p style="font-weight: bold;">Religion : <span>{{$Religion}}</span></p>
        									<p style="font-weight: bold;">Constellation : <span>{{$Constellation}}</span></p>
      									</div>
      									<div class="modal-footer">
      										
      									</div>
    							</div>
  							</div>
<!--???? deo biet the div cua cai mo ma k dc xoa-->  							
</div>

						</div>
                        @empty
                            <h1>Nothing found</h1>
						@endforelse
						{{$Users->links()}}
					</div>
					<!--//left-->
				</div>
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