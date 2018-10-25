<!DOCTYPE html>
<html lang="en">

<head>
	<title>Welcome to Dating Tonight </title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Student Matriculate Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!-- Meta tags -->
	<link href="/templates/datingtonight/formRegister/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //pop-ups-->
	<!-- Calendar -->
<link rel="stylesheet" href="/templates/datingtonight/formRegister/css/jquery-ui.css" />
<!-- //Calendar -->

	<!-- font-awesome icons -->
	<link rel="stylesheet" href="/templates/datingtonight/formRegister/css/font-awesome.min.css" />
	<!-- //font-awesome icons -->
	<!--stylesheets-->
	<link href="/templates/datingtonight/formRegister/css/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->
	<link href="//fonts.googleapis.com/css?family=Cuprum:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
</head>

<body>
	<h1 class="header-w3ls">
		Dating Tonight Form</h1>
	<div class="icon-stu">

		<h2 class="student-w3l">Login And Register Dating Tonight</h2>
		<div class="stude-user-wls">
			<span class="fa fa-heartbeat" aria-hidden="true"></span>
			<div class="clear"> </div>
		</div>
		<div class="row-col">
			<div class="banner-agileits-btm">
				<div class="w3layouts_more-buttn">
					<a href="#small-dialog1 " class="play-icon popup-with-zoom-anim">login</a>
				</div>
				<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
					<div class="agileits_modal_body">
						<!--login form-->
						<div class="newsletter ">
							<h2>Login Form</h2>

							<div class="letter-w3ls">
								@include('auth.users.formLogin')
								<div class="clear"></div>
							</div>
							<!--//login form-->
						</div>
					</div>
                </div>
			</div>
			<div class="banner-its-btm">
				<div class="outs_more-buttn">
					<a href="#small-dialog2 " class="play-icon popup-with-zoom-anim">Register</a>
				</div>
				<div id="small-dialog2" class="mfp-hide w3ls_small_dialog wthree_pop">
					<div class="agileits_modal_body">
						<!--register form-->
						<div class="student-reg-w3 ">
							<h3>Register Form</h3>
							<div class="letter-w3ls">
								@include('auth.users.formRegister')
							</div>
						</div>
				<!--//register form-->

					</div>
				</div>
			<div class="clear"> </div>
			</div>
		</div>
	</div>
<div class="copy">
	<p>&copy;2018 Dating Tonight Form. All Rights Reserved | Developed by The Dreamers and Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
</div>

<script type='text/javascript' src='/templates/datingtonight/formRegister/js/jquery-2.2.3.min.js'></script>

<!--scripts-->

<!--//scripts-->
<script src="/templates/datingtonight/formRegister/js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
	$(document).ready(function () {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

	});
</script>
<!-- //pop-up-box video -->
<!-- //js -->
<!-- Calendar -->
	<script src="js/jquery-ui.js"></script>
	  <script>
			  $(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
			  });
	  </script>
<!-- //Calendar -->
</body>
</html>