<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colrolib Templates">
    <meta name="author" content="Colrolib">
    <meta name="keywords" content="Colrolib Templates">

    <!-- Title Page-->
    <title>FINDING PARTNER</title>

    <!-- Icons font CSS-->
    <link href="/templates/datingtonight/formFinding/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="/templates/datingtonight/formFinding/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="/templates/datingtonight/formFinding/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/templates/datingtonight/formFinding/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/templates/datingtonight/formFinding/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-img-1 p-t-200 p-b-120">
        <a href="{{ route('datingtonight.index.index') }}" title="Back"><img style="width:50px; height: 50px; margin:0px 0px 20px 100px; " src="/templates/datingtonight/formFinding/images/back.ico" alt="Back"></a>
        <div class="wrapper wrapper--w900">
            <div class="card card-4">
                <div class="card-body">
                    <ul class="tab-list">
                        <li class="tab-list__item active">
                            <a class="tab-list__link" href="#tab1" data-toggle="tab">Information</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <form method="POST" action="{{route('datingtonight.findingperson.result')}}">
                            	<input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            	<!-- Gender and City select option -->
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                        	<!-- Gender -->
                                            <label class="label">Gender:</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="gender">
                                                    <option selected="selected" value="">Anything</option>
                                                	@foreach($gender as $gd)
                                                    	<option value="{{$gd->id}}">{{$gd->gender}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                            <!-- Gender -->
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                        	<!-- City -->
                                            <label class="label">City:</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="city">
                                                    <option selected="selected" value="">Anything</option>
                                                    @foreach($city as $ct)
                                                        <option value="{{$ct->id}}">{{$ct->city}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                            <!-- City -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Gender and City select option -->

                                <!-- From age to age select option -->
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">From age:</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="fromage">
                                                   	<?php 
                                                   		for($i=18;$i<=100;$i++)
                                                   		{
                                                            if ($i==18) {
                                                                echo '<option selected="selected" value="'.$i.'">'.$i.'</option>';
                                                            }
                                                            else
                                                   			    echo '<option value="'.$i.'">'.$i.'</option>';
                                                   		}
                                                   	?>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">To Age:</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="toage">
                                                   	<?php 
                                                   		for($i=18;$i<=100;$i++)
                                                   		{
                                                            if ($i==30) {
                                                                echo '<option selected="selected" value="'.$i.'">'.$i.'</option>';
                                                            }
                                                            else
                                                   			    echo '<option value="'.$i.'">'.$i.'</option>';
                                                   		}
                                                   	?>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- From age to age select option -->

                                <!-- Eye and hair color -->
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Hair Color:</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="hair_color">
                                                	@foreach($hair_color as $hc)
                                                    @if($hc->id==0)
                                                        <option value="" selected="selected">Anything</option>
                                                    @else
                                                        <option value="{{$hc->id}}">{{$hc->color}}</option>
                                                    @endif 
                                                    @endforeach
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Eye Color:</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="eye_color">
                                               		@foreach($eye_color as $ec)
                                                    @if($ec->id==0)
                                                        <option value="" selected="selected">Anything</option>
                                                    @else
                                                    	<option value="{{$ec->id}}">{{$ec->color}}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Eye and hair color -->

                                <!-- Hair length and style -->
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Hair Length:</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="hair_length">
                                                	@foreach($hair_length as $hl)
                                                    @if($hl->id==0)
                                                        <option value="" selected="selected">Anything</option>
                                                    @else
                                                    	<option value="{{$hl->id}}">{{$hl->length}}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Hair Style:</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="hair_style">
                                               		@foreach($hair_style as $hs)
                                                    @if($hs->id==0)
                                                        <option value="" selected="selected">Anything</option>
                                                    @else
                                                    	<option value="{{$hs->id}}">{{$hs->style}}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Hair length and style -->

                                <!-- Height -->
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Height From:</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="fromheight">
                                                   	<?php 
                                                   		for($i=140;$i<=220;$i++)
                                                   		{
                                                            if ($i==150) {
                                                                echo '<option selected="selected" value="'.$i.'">'.$i.' cm</option>';
                                                            }
                                                            else 
                                                   			    echo '<option value="'.$i.'">'.$i.' cm</option>';
                                                   		}
                                                   	?>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">To Height:</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="toheight">
                                                   	<?php 
                                                   		for($i=140;$i<=220;$i++)
                                                   		{
                                                            if ($i==180) {
                                                                echo '<option selected="selected" value="'.$i.'">'.$i.' cm</option>';
                                                            }
                                                            else
                                                   			    echo '<option value="'.$i.'">'.$i.' cm</option>';
                                                   		}
                                                   	?>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Height -->

                                <!-- Weight -->
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Weight From:</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="fromweight">
                                                   	<?php 
                                                   		for($i=40;$i<=220;$i++)
                                                   		{
                                                            if ($i==50) {
                                                                echo '<option selected="selected" value="'.$i.'">'.$i.' kg</option>';
                                                            }
                                                            else
                                                   			    echo '<option value="'.$i.'">'.$i.' kg</option>';
                                                   		}
                                                   	?>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">To Weight:</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="toweight">
                                                   	<?php 
                                                   		for($i=40;$i<=220;$i++)
                                                   		{
                                                            if ($i==70) {
                                                                echo '<option selected="selected" value="'.$i.'">'.$i.' kg</option>';
                                                            }
                                                            else
                                                   			    echo '<option value="'.$i.'">'.$i.' kg</option>';
                                                   		}
                                                   	?>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Weight -->

                                <!-- Body -->
                     			<div>
                                    <div class="input-group">
                                        <label class="label">Body:</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="body">
                                              	@foreach($body as $bd)
                                                    @if($bd->id==0)
                                                        <option value="" selected="selected">Anything</option>
                                                    @else
                                                  	    <option value="{{$bd->id}}">{{$bd->body}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        	<div class="select-dropdown"></div>
                                    	</div>
                                	</div>
                            	</div>
                            	<!-- Body -->

                            	<!-- Drinking and Smoking -->
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Drinking:</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="drink">
                                                	@foreach($drinking as $dr)
                                                    @if($dr->id==0)
                                                        <option value="" selected="selected">Anything</option>
                                                    @else
                                                    	<option value="{{$dr->id}}">{{$dr->drink}}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Smoking:</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="smoke">
                                               		@foreach($smoking as $sm)
                                                    @if($sm->id==0)
                                                        <option value="" selected="selected">Anything</option>
                                                    @else
                                                    	<option value="{{$sm->id}}">{{$sm->smoke}}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Drinking and Smoking -->

                                <!-- Job status -->
                     			<div>
                                    <div class="input-group">
                                        <label class="label">Job Status:</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="job_status">
                                              	@foreach($job_status as $js)
                                                @if($js->id==0)
                                                        <option value="" selected="selected">Anything</option>
                                                @else
                                                  	<option value="{{$js->id}}">{{$js->status}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        	<div class="select-dropdown"></div>
                                    	</div>
                                	</div>
                            	</div>
                            	<!-- Job status -->

                            	<!-- Home type -->
                     			<div>
                                    <div class="input-group">
                                        <label class="label">Home type:</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="house_type">
                                              	@foreach($house_type as $ht)
                                                @if($ht->id==0)
                                                    <option value="" selected="selected">Anything</option>
                                                @else
                                                  	<option value="{{$ht->id}}">{{$ht->type}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        	<div class="select-dropdown"></div>
                                    	</div>
                                	</div>
                            	</div>
                            	<!-- Home type -->

                            	<!-- Live with -->
                     			<div>
                                    <div class="input-group">
                                        <label class="label">Live with:</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="live_with">
                                              	@foreach($live_with as $lw)
                                                @if($lw->id==0)
                                                    <option value="" selected="selected">Anything</option>
                                                @else
                                                  	<option value="{{$lw->id}}">{{$lw->livewith}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        	<div class="select-dropdown"></div>
                                    	</div>
                                	</div>
                            	</div>
                            	<!-- Live with -->

                            	<!-- Have children -->
                     			<div>
                                    <div class="input-group">
                                        <label class="label">Have Children:</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="have_children">
                                              	@foreach($have_children as $hc)
                                                @if($hc->id==0)
                                                    <option value="" selected="selected">Anything</option>
                                                @else
                                                  	<option value="{{$hc->id}}">{{$hc->children}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        	<div class="select-dropdown"></div>
                                    	</div>
                                	</div>
                            	</div>
                            	<!-- Have children -->

                            	<!-- National -->
                     			<div>
                                    <div class="input-group">
                                        <label class="label">National:</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="national">
                                              	@foreach($national as $na)
                                                @if($na->id==0)
                                                    <option value="" selected="selected">Anything</option>
                                                @else
                                                  	<option value="{{$na->id}}">{{$na->national}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        	<div class="select-dropdown"></div>
                                    	</div>
                                	</div>
                            	</div>
                            	<!-- National -->

                            	<!-- Education level -->
                     			<div>
                                    <div class="input-group">
                                        <label class="label">Educational Level:</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="educational_level">
                                              	@foreach($educational_level as $el)
                                                @if($el->id==0)
                                                    <option value="" selected="selected">Anything</option>
                                                @else
                                                  	<option value="{{$el->id}}">{{$el->level}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        	<div class="select-dropdown"></div>
                                    	</div>
                                	</div>
                            	</div>
                            	<!-- Educational level -->

                            	<!-- Language -->
                     			<div>
                                    <div class="input-group">
                                        <label class="label">Language:</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="language">
                                              	@foreach($language as $lg)
                                                @if($lg->id==0)
                                                    <option value="" selected="selected">Anything</option>
                                                @else
                                                  	<option value="{{$lg->id}}">{{$lg->language}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        	<div class="select-dropdown"></div>
                                    	</div>
                                	</div>
                            	</div>

                            	<!-- Religion -->
                     			<div>
                                    <div class="input-group">
                                        <label class="label">Religion:</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="religion">
                                              	@foreach($religion as $rl)
                                                @if($rl->id==0)
                                                    <option value="" selected="selected">Anything</option>
                                                @else
                                                  	<option value="{{$rl->id}}">{{$rl->religion}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        	<div class="select-dropdown"></div>
                                    	</div>
                                	</div>
                            	</div>
                            	<!-- Religion -->

                            	<!-- Constellation -->
                     			<div>
                                    <div class="input-group">
                                        <label class="label">Constellation:</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="constellation">
                                              	@foreach($constellation as $cs)
                                                @if($cs->id==0)
                                                    <option value="" selected="selected">Anything</option>
                                                @else
                                                  	<option value="{{$cs->id}}">{{$cs->constellation}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        	<div class="select-dropdown"></div>
                                    	</div>
                                	</div>
                            	</div>
                            	<!-- Constellation -->

                                <button class="btn-submit m-t-0" type="submit">search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src="/templates/datingtonight/formFinding/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="/templates/datingtonight/formFinding/vendor/select2/select2.min.js"></script>
    <script src="/templates/datingtonight/formFinding/vendor/jquery-validate/jquery.validate.min.js"></script>
    <script src="/templates/datingtonight/formFinding/vendor/bootstrap-wizard/bootstrap.min.js"></script>
    <script src="/templates/datingtonight/formFinding/vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="/templates/datingtonight/formFinding/vendor/datepicker/moment.min.js"></script>
    <script src="/templates/datingtonight/formFinding/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="/templates/datingtonight/formFinding/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
