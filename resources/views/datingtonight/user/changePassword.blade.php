@extends('templates.datingtonight.master')
@section('title')
   Change Password
@endsection
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
	/* Style inputs with type="text", select elements and textareas */
	input[type=text], input[type=password], input[type=date], select, textarea {
	    width: 100%; /* Full width */
	    padding: 12px; /* Some padding */
	    border: 1px solid #ccc; /* Gray border */
	    border-radius: 4px; /* Rounded borders */
	    box-sizing: border-box; /* Make sure that padding and width stays in place */
	    margin-top: 6px; /* Add a top margin */
	    margin-bottom: 16px; /* Bottom margin */
	    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
	}

	/* Style the submit button with a specific background color etc */
	input[type=submit] {
	    background-color: #BD081C;
	    color: white;
	    padding: 12px 20px;
	    border: none;
	    border-radius: 4px;
	    cursor: pointer;
	    margin-left: 12.5%;
	}

	/* When moving the mouse over the submit button, add a darker green color */
	input[type=submit]:hover {
	    background-color: #F08690;
	}

	/* Add a background color and some padding around the form */
	.container-main {
	    border-radius: 5px;
	    background-color: #F5DEE8;
	    padding: 20px;
	    margin: 5px 150px 30px 150px;
	}

	.container-sub-one, .container-sub-two {
		border-radius: 5px;
	    background-color: #F5DEE8;
	    padding: 20px;
	    margin: 5px 150px 30px 150px;
	    display: none;
	}

	/*Style color for label*/
	.csslb {
		color: #F08690;
		display: block;
	}

	/*CSS Toggle Slide*/
	#personal, #personal-body, #personal-other {
	    background-color: #F08690;
	    padding: 10px;
	    margin-left: 150px;
	    width: 75%;
	    color: #FFF;
	    border: 1px solid #F0F3F1;
		border-radius: 5px;
		margin-bottom: 10px;
	}

	#personal:hover, #personal-body:hover, #personal-other:hover {
		background-color:#F08690;
		border: 1px solid #F08690;
		color: #FFF;
	}

	#information {
		margin: 30px;
	}

	#aEdit {
		background-color: #F08690;
	    padding: 10px;
	    margin-left: 150px;
	    color: #FFF;
	    border: 1px solid #F0F3F1;
		border-radius: 5px;
		margin-bottom: 10px;
	}
</style>
@if (Session::has('checkUser'))
	@if ($errors->any())
	    <div class="alert alert-danger" style="width:71%; margin-left: 14.5%; padding-left: 5%; margin-top: 10px">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<form action="{{ route('datingtonight.user.changePassword') }}" id="information" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<a href="javascript:void(0)" >
			<div id="personal">
				CHANGE PASSWORD
			</div>
		</a>
		@if (session('announce'))
		    <script type="text/javascript" charset="utf-8">
		    	alert("{{ session('announce') }}");
		    </script>
		@endif
		@if (session('alert'))
		    <script type="text/javascript" charset="utf-8">
		    	alert("{{ session('alert') }}");
		    </script>
		@endif
		<div class="container-main">
		    <label class="csslb">Old password</label>
		    <input type="password" id="oldPassword" name="txtOldPassword">

		    <label class="csslb">New password</label>
		    <input type="password" id="newPassword" name="txtNewPassword">

		    <label class="csslb">Confirm new password</label>
		    <input type="password" id="confirmPassword" name="txtConfirmPassword">
	    </div>
	    <input type="submit" onclick="return confirm('Are you sure want to change password?')" name="submit" value="Change Password">
	</form>
@endif
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
@endsection