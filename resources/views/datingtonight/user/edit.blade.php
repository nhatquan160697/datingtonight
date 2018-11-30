@extends('templates.datingtonight.master')
@section('title')
	@if (Session::has('checkUser'))
	   {{ $getInfoUser->Fullname }}
	@endif
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
	<form action="{{ route('datingtonight.user.edit') }}" id="information" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<a href="javascript:void(0)" >
			<div id="personal">
				PERSONAL INFORMATION
			</div>
		</a>
		<div class="container-main">
		  	<label class="csslb">Avatar</label>
		    <img src="#" alt="This is image">
		    <input type="file" name="fAvatar">

		    <label class="csslb">Username</label>
		    <input type="text" id="username" name="username" value="{{ $getInfoUser->username }}" >

		    <label class="csslb">Password</label>
		    <input type="password" id="password" name="password" value="{{ $getInfoUser->password }}" >

		    <label class="csslb">Full name</label>
		    <input type="text" id="fullname" name="fullname" value="{{ $getInfoUser->Fullname }}" >

		    <label class="csslb">Email</label>
		   	<input type="text" id="email" name="email" value="{{ $getInfoUser->email }}" >

		   	<label class="csslb">Phone number</label>
		   	<input type="text" id="phone" name="phone" value="{{ $getInfoUser->phone_number }}" >

		   	<label class="csslb">Birthday</label>
		   	<input type="date" id="birthday" name="birthday" value="{{ $getInfoUser->Birthdate }}">

		   	<label class="csslb">Facebook</label>
		   	<input type="text" id="facebook" name="facebook" value="{{ $getInfoUser->Facebook }}" >
		   	<label class="csslb">Gender</label>
		   	<select id="gender" name="txtGender">
		   		<option value="{{ $getInfoUser->idGender }}" selected>{{ $getInfoUser->gender }}</option>
				@foreach($getGender as $iGender)
					@if($iGender->id != $getInfoUser->idGender) continue;
						<option value="{{ $iGender->id }}">{{ $iGender->gender }}</option>
					@endif
		    	@endforeach
		    </select>

		   	<label class="csslb">City</label>
		    <select id="city" name="city">
		    	<option value="{{ $getInfoUser->idCity }}" selected>{{ $getInfoUser->city }}</option>
				@foreach($getCity as $iCity)
					@if($iCity->id != $getInfoUser->idCity) continue;
			    		<option value="{{ $iCity->id }}">{{ $iCity->city }}</option>
			    	@endif
		    	@endforeach
		    </select>
	    </div>
	    <a href="javascript:void(0)" >
			<div id="personal-body">
				BODY
			</div>
		</a>
		<div class="container-sub-one">
		    <label class="csslb">Hair Color</label>
		    <select id="hair-color" name="txtHairColor">
		    	<option value="{{ $getInfoUser->idHairColor }}" selected>{{ $getInfoUser->hairColor }}</option>
				@foreach($getHairColor as $iHC)
					@if($iHC->id != $getInfoUser->idHairColor) continue;
			    		<option value="{{ $iHC->id }}">{{ $iHC->color }}</option>
			    	@endif
		    	@endforeach
		    </select>

		    <label class="csslb">Hair length</label>
		    <select id="hair-length" name="txtHairLength">
		    	<option value="{{ $getInfoUser->idHairLength }}" selected>{{ $getInfoUser->length }}</option>
				@foreach($getHairLength as $iHL)
					@if($iHL->id != $getInfoUser->idHairLength) continue;
			    		<option value="{{ $iHL->id }}">{{ $iHL->length }}</option>
			    	@endif
		    	@endforeach
		    </select>

		    <label class="csslb">Hair style</label>
		    <select id="hair-style" name="txtHairStyle">
		    	<option value="{{ $getInfoUser->idHairStyle }}" selected>{{ $getInfoUser->style }}</option>
				@foreach($getHairStyle as $iHS)
					@if($iHS->id != $getInfoUser->idHairStyle) continue;
			    		<option value="{{ $iHS->id }}">{{ $iHS->style }}</option>
			    	@endif
		    	@endforeach
		    </select>

		    <label class="csslb">Eye color</label>
		   	<select id="eye-color" name="txtEyeColor">
		    	<option value="{{ $getInfoUser->idEyeColor }}" selected>{{ $getInfoUser->eyeColor }}</option>
				@foreach($getEyeColor as $iEC)
					@if($iEC->id != $getInfoUser->idEyeColor) continue;
			    		<option value="{{ $iEC->id }}">{{ $iEC->color }}</option>
			    	@endif
		    	@endforeach
		    </select>

		   	<label class="csslb">Height</label>
		   	<input type="text" id="height" name="height" value="{{ $getInfoUser->height }}" >

		   	<label class="csslb">Weight</label>
		   	<input type="text" id="weight" name="weight" value="{{ $getInfoUser->weight }}" >

		   	<label class="csslb">Body</label>
			<select name="txtBody">
		    	<option value="{{ $getInfoUser->idBody }}" selected>{{ $getInfoUser->body }}</option>
				@foreach($getBody as $iBD)
					@if($iBD->id != $getInfoUser->idBody) continue;
			    		<option value="{{ $iBD->id }}">{{ $iBD->body }}</option>
			    	@endif
		    	@endforeach
		    </select>
	    </div>
	    <a href="javascript:void(0)" >
			<div id="personal-other">
				OTHER
			</div>
		</a>
		<div class="container-sub-two">
		    <label class="csslb">Drinking</label>
		    <select id="drinking" name="txtDrinking">
		    	<option value="{{ $getInfoUser->idDrinking }}" selected>{{ $getInfoUser->drink }}</option>
				@foreach($getDrinking as $iDK)
					@if($iDK->id != $getInfoUser->idDrinking) continue;
			    		<option value="{{ $iDK->id }}">{{ $iDK->drink }}</option>
			    	@endif
		    	@endforeach
		    </select>

		    <label class="csslb">Smoking</label>
		    <select id="smoking" name="txtSmoking">
		    	<option value="{{ $getInfoUser->idSmoking }}" selected>{{ $getInfoUser->smoke }}</option>
				@foreach($getSmoking as $iSK)
					@if($iSK->id != $getInfoUser->idSmoking) continue;
			    		<option value="{{ $iSK->id }}">{{ $iSK->smoke }}</option>
			    	@endif
		    	@endforeach
		    </select>

		    <label class="csslb">Job status</label>
		    <select id="jobStatus" name="txtJobStatus">
		    	<option value="{{ $getInfoUser->idJobStatus }}" selected>{{ $getInfoUser->status }}</option>
				@foreach($getJobStatus as $iJS)
					@if($iJS->id != $getInfoUser->idJobStatus) continue;
			    		<option value="{{ $iJS->id }}">{{ $iJS->status }}</option>
			    	@endif
		    	@endforeach
		    </select>

		    <label class="csslb">Home type</label>
		   	<select id="homeType" name="txtHomeType">
		    	<option value="{{ $getInfoUser->idHomeType }}" selected>{{ $getInfoUser->type }}</option>
				@foreach($getHomeType as $iHT)
					@if($iHT->id != $getInfoUser->idHomeType) continue;
			    		<option value="{{ $iHT->id }}">{{ $iHT->type }}</option>
			    	@endif
		    	@endforeach
		    </select>

		   	<label class="csslb">Live with</label>
		   	<select id="liveWith" name="txtLiveWith">
		    	<option value="{{ $getInfoUser->idLivewith }}" selected>{{ $getInfoUser->livewith }}</option>
				@foreach($getLivewith as $iLW)
					@if($iLW->id != $getInfoUser->idLivewith) continue;
			    		<option value="{{ $iLW->id }}">{{ $iLW->livewith }}</option>
			    	@endif
		    	@endforeach
		    </select>

		   	<label class="csslb">Have children</label>
		   	<select id="haveChildren" name="txtHaveChildren">
		    	<option value="{{ $getInfoUser->idHaveChild }}" selected>{{ $getInfoUser->children }}</option>
				@foreach($getHaveChild as $iHChild)
					@if($iHChild->id != $getInfoUser->idHaveChild) continue;
			    		<option value="{{ $iHChild->id }}">{{ $iHChild->children }}</option>
			    	@endif
		    	@endforeach
		    </select>

		   	<label class="csslb">National</label>
		   	<select id="national" name="txtNational">
		    	<option value="{{ $getInfoUser->idNational }}" selected>{{ $getInfoUser->national }}</option>
				@foreach($getNational as $iNA)
					@if($iNA->id != $getInfoUser->idNational) continue;
			    		<option value="{{ $iNA->id }}">{{ $iNA->national }}</option>
			    	@endif
		    	@endforeach
		    </select>

		   	<label class="csslb">Education level</label>
		   	<select id="education" name="txtEducation">
		    	<option value="{{ $getInfoUser->idEducation }}" selected>{{ $getInfoUser->level }}</option>
				@foreach($getEducation as $iEDU)
					@if($iEDU->id != $getInfoUser->idEducation) continue;
			    		<option value="{{ $iEDU->id }}">{{ $iEDU->level }}</option>
			    	@endif
		    	@endforeach
		    </select>

		   	<label class="csslb">Language</label>
		   	<select id="language" name="txtLanguage">
		    	<option value="{{ $getInfoUser->idLanguage }}" selected>{{ $getInfoUser->language }}</option>
				@foreach($getLanguage as $iLANG)
					@if($iLANG->id != $getInfoUser->idLanguage) continue;
			    		<option value="{{ $iLANG->id }}">{{ $iLANG->language }}</option>
			    	@endif
		    	@endforeach
		    </select>

		   	<label class="csslb">Religion</label>
		   	<select id="religion" name="txtReligion">
		    	<option value="{{ $getInfoUser->idReligion }}" selected>{{ $getInfoUser->religion }}</option>
				@foreach($getReligion as $iRG)
					@if($iRG->id != $getInfoUser->idReligion) continue;
			    		<option value="{{ $iRG->id }}">{{ $iRG->religion }}</option>
			    	@endif
		    	@endforeach
		    </select>

			<label class="csslb">Constellation</label>
		   	<select id="constellation" name="txtConstellation">
		    	<option value="{{ $getInfoUser->idConstellation }}" selected>{{ $getInfoUser->constellation }}</option>
				@foreach($getConstellation as $iCON)
					@if($iCON->id != $getInfoUser->idConstellation) continue;
			    		<option value="{{ $iCON->id }}">{{ $iCON->constellation }}</option>
			    	@endif
		    	@endforeach
		    </select>
	    </div>
	    <input type="submit" name="submit" value="Edit Information">
	</form>
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