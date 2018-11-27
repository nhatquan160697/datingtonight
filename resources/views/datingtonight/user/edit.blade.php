@extends('templates.datingtonight.master')
@section('title')
	@if (Session::has('checkUser'))
	   {{ session()->get('checkUser')[0]->Fullname }}
	@endif
@endsection
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
	/* Style inputs with type="text", select elements and textareas */
	input[type=text], input[type=password], select, textarea {
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
	    background-color: #4CAF50;
	    color: white;
	    padding: 12px 20px;
	    border: none;
	    border-radius: 4px;
	    cursor: pointer;}

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
	<div id="information">
		<a href="javascript:void(0)" >
			<div id="personal">
				PERSONAL INFORMATION
			</div>
		</a>
		<div class="container-main">
		  	<label class="csslb">Avatar</label>
		    <img src="#" alt="This is image">

		    <label class="csslb">Username</label>
		    <input type="text" id="username" name="username" value="{{ session()->get('checkUser')[0]->username }}" readonly>

		    <label class="csslb">Password</label>
		    <input type="password" id="password" name="password" value="{{ session()->get('checkUser')[0]->password }}" readonly>

		    <label class="csslb">Full name</label>
		    <input type="text" id="fullname" name="fullname" value="{{ session()->get('checkUser')[0]->Fullname }}" readonly>

		    <label class="csslb">Email</label>
		   	<input type="text" id="email" name="email" value="{{ session()->get('checkUser')[0]->email }}" readonly>

		   	<label class="csslb">Phone number</label>
		   	<input type="text" id="phone" name="phone" value="{{ session()->get('checkUser')[0]->phone_number }}" readonly>

		   	<label class="csslb">Birthday</label>
		   	<input type="text" id="birthday" name="birthday" value="{{-- {{ session()->get('checkUser')[0]->gender }} --}}" readonly>

		   	<label class="csslb">Facebook</label>
		   	<input type="text" id="facebook" name="facebook" value="{{ session()->get('checkUser')[0]->Facebook }}" readonly>

		   	<label class="csslb">Gender</label>
		   	<input type="text" id="gender" name="gender" value="{{-- {{ session()->get('checkUser')[0]->gender }} --}}" readonly>

		   	<label class="csslb">City</label>
		   	<input type="text" id="city" name="city" value="{{-- {{ session()->get('checkUser')[0]->gender }} --}}" readonly>

		    {{-- <label class="csslb">Country</label>
		    <select id="country" name="country">
		      <option value="australia">Da Nang</option>
		      <option value="canada">Canada</option>
		      <option value="usa">USA</option>
		    </select> --}}
		    {{-- <label>Subject</label>
		    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea> --}}
	    </div>
	    <a href="javascript:void(0)" >
			<div id="personal-body">
				BODY
			</div>
		</a>
		<div class="container-sub-one">
		    <label class="csslb">Hair Color</label>
		    <input type="text" id="hair-color" name="hairColor" value="{{ session()->get('checkUser')[0]->username }}" readonly>

		    <label class="csslb">Hair length</label>
		    <input type="password" id="hair-length" name="hairLength" value="{{ session()->get('checkUser')[0]->password }}" readonly>

		    <label class="csslb">Hair style</label>
		    <input type="text" id="hair-style" name="hairStyle" value="{{ session()->get('checkUser')[0]->Fullname }}" readonly>

		    <label class="csslb">Eye color</label>
		   	<input type="text" id="eye-color" name="eyeColor" value="{{ session()->get('checkUser')[0]->email }}" readonly>

		   	<label class="csslb">Height</label>
		   	<input type="text" id="height" name="height" value="{{ session()->get('checkUser')[0]->phone_number }}" readonly>

		   	<label class="csslb">Weight</label>
		   	<input type="text" id="weight" name="weight" value="{{ session()->get('checkUser')[0]->Facebook }}" readonly>

		   	<label class="csslb">Body</label>
		   	<input type="text" id="body" name="body" value="{{ session()->get('checkUser')[0]->Facebook }}" readonly>

		   	{{-- <label class="csslb">Gender</label>
		   	<input type="text" id="facebook" name="facebook" value="{{ session()->get('checkUser')[0]->gender }}" readonly> --}}

		    {{-- <label class="csslb">Country</label>
		    <select id="country" name="country">
		      <option value="australia">Da Nang</option>
		      <option value="canada">Canada</option>
		      <option value="usa">USA</option>
		    </select> --}}
		    {{-- <label>Subject</label>
		    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea> --}}
	    </div>
	    <a href="javascript:void(0)" >
			<div id="personal-other">
				OTHER
			</div>
		</a>
		<div class="container-sub-two">
		    <label class="csslb">Drinking</label>
		    <input type="text" id="drinking" name="drinking" value="{{ session()->get('checkUser')[0]->username }}" readonly>

		    <label class="csslb">Smoking</label>
		    <input type="password" id="somking" name="somking" value="{{ session()->get('checkUser')[0]->password }}" readonly>

		    <label class="csslb">Job status</label>
		    <input type="text" id="jobStatus" name="jobStatus" value="{{ session()->get('checkUser')[0]->Fullname }}" readonly>

		    <label class="csslb">Home type</label>
		   	<input type="text" id="homeType" name="homeType" value="{{ session()->get('checkUser')[0]->email }}" readonly>

		   	<label class="csslb">Live with</label>
		   	<input type="text" id="liveWith" name="liveWith" value="{{ session()->get('checkUser')[0]->phone_number }}" readonly>

		   	<label class="csslb">Have children</label>
		   	<input type="text" id="haveChildren" name="haveChildren" value="{{ session()->get('checkUser')[0]->Facebook }}" readonly>

		   	<label class="csslb">National</label>
		   	<input type="text" id="national" name="national" value="{{ session()->get('checkUser')[0]->Facebook }}" readonly>

		   	<label class="csslb">Education level</label>
		   	<input type="text" id="education" name="education" value="{{ session()->get('checkUser')[0]->Facebook }}" readonly>

		   	<label class="csslb">Language</label>
		   	<input type="text" id="language" name="language" value="{{ session()->get('checkUser')[0]->Facebook }}" readonly>

		   	<label class="csslb">Religion</label>
		   	<input type="text" id="religion" name="religion" value="{{ session()->get('checkUser')[0]->Facebook }}" readonly>

			<label class="csslb">Constellation</label>
		   	<input type="text" id="constellation" name="constellation" value="{{ session()->get('checkUser')[0]->Facebook }}" readonly>
		   	{{-- <label class="csslb">Gender</label>
		   	<input type="text" id="facebook" name="facebook" value="{{ session()->get('checkUser')[0]->gender }}" readonly> --}}

		    {{-- <label class="csslb">Country</label>
		    <select id="country" name="country">
		      <option value="australia">Da Nang</option>
		      <option value="canada">Canada</option>
		      <option value="usa">USA</option>
		    </select> --}}
		    {{-- <label>Subject</label>
		    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea> --}}
	    </div>
	</div>
@endif
<script>
$(document).ready(function(){
    $("#personal").click(function(){
        $(".container-main").slideToggle();
        $(".container-sub-one").css("display","none");
        $(".container-sub-two").css("display","none");
    });
    $("#personal-body").click(function(){
        $(".container-sub-one").slideToggle();
        $(".container-main").css("display","none");
        $(".container-sub-two").css("display","none");
    });
    $("#personal-other").click(function(){
        $(".container-sub-two").slideToggle();
        $(".container-main").css("display","none");
        $(".container-sub-one").css("display","none");
    });
});
</script>
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