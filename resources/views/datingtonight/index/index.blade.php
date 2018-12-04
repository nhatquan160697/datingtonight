@extends('templates.datingtonight.master')
@section('content')
<style>
.carousel-item {
   background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(/templates/datingtonight/images/images/anh_bia1.jpg) no-repeat;
   background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(/templates/datingtonight/images/images/anh_bia1.jpg) no-repeat;
   background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(/templates/datingtonight/images/images/anh_bia1.jpg) no-repeat;
   background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(/templates/datingtonight/images/images/anh_bia1.jpg) no-repeat;
   background-size: cover;
}
</style>
<!--/banner-->
<div class="banner">
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
         <div class="carousel-item active">
            <div class="carousel-caption">
               <h3>Dating Tonight
                  <span>Finding your half-heart</span>
               </h3>
               <div class="read">
                  <a href="#" class="btn btn-primary read-m">Read More</a>
               </div>
            </div>
         </div>
         @php
            $item_number = 2;
         @endphp
         @foreach($getTop5 as $top)
         <style>
            .carousel-item.item{{$item_number}} {
               background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(/storage/app/files/datingplaces/{{$top->picture}}) no-repeat;
               background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(/storage/app/files/datingplaces/{{$top->picture}}) no-repeat;
               background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(/storage/app/files/datingplaces/{{$top->picture}}) no-repeat;
               background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(/storage/app/files/datingplaces/{{$top->picture}}) no-repeat;
               background-size: cover;
            }
         </style>
         <div class="carousel-item item{{$item_number}}">
            <div class="carousel-caption">
               <h3>{{$top->name_place}}
                  <span>{{ $top->name_type }}</span>
               </h3>
               <div class="read">
                  <a href="{{ route('datingtonight.datingplaces.detail',['slug' => str_slug($top->name_place), 'id' => $top->id_place]) }}" class="btn btn-primary read-m">Read More</a>
               </div>
            </div>
         </div>
         @php
            $item_number++;
         @endphp
         @endforeach
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
      </a>
   </div>
</div>
<!--/model-->
<!--//banner-->
<section class="bottom-slider">
   <div class="course_demo1">
      <ul id="flexiselDemo1">
         <li>
            <div class="blog-item">
               <img src="/templates/datingtonight/images/1.jpg" alt=" " class="img-fluid" />
               <button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
                  <i class="fas fa-play"></i>
               </button>

               <div class="floods-text">
                  <h3>The fed and inequality
                     <span>Blogger
                        <label>|</label>
                        <i>Adom Smith</i>
                     </span>
                  </h3>

               </div>
            </div>
         </li>
         <li>
            <div class="blog-item">
               <img src="/templates/datingtonight/images/2.jpg" alt=" " class="img-fluid" />
               <button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
                  <i class="fas fa-play"></i>
               </button>

               <div class="floods-text">
                  <h3>The fastest insect in the world
                     <span>Blogger
                        <label>|</label>
                        <i>Adom Smith</i>
                     </span>
                  </h3>

               </div>
            </div>
         </li>
         <li>
            <div class="blog-item">
               <img src="/templates/datingtonight/images/3.jpg" alt=" " class="img-fluid" />
               <button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
                  <i class="fas fa-play"></i>
               </button>


               <div class="floods-text">
                  <h3>Billionaires versus Millionaires
                     <span>Blogger
                        <label>|</label>
                        <i>Adom Smith</i>
                     </span>
                  </h3>

               </div>
            </div>
         </li>
         <li>
            <div class="blog-item">
               <img src="/templates/datingtonight/images/4.jpg" alt=" " class="img-fluid" />
               <button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
                  <i class="fas fa-play"></i>
               </button>


               <div class="floods-text">
                  <h3>Billionaires versus Millionaires
                     <span>Blogger
                        <label>|</label>
                        <i>Adom Smith</i>
                     </span>
                  </h3>

               </div>
            </div>
         </li>
      </ul>
   </div>
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="embed-responsive embed-responsive-21by9">
                  <iframe src="https://player.vimeo.com/video/145787219"></iframe>
               </div>
            </div>

         </div>
      </div>
   </div>
</section>
<!--/main-->
<section class="main-content-w3layouts-agileits">
   <div class="container">
      <div class="row">
         <!--left-->
         <div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
            @foreach($getTop1 as $top1)
            <div class="blog-grid-top">
               <div class="b-grid-top">
                  <div class="blog_info_left_grid">
                     <a href="{{ route('datingtonight.datingplaces.detail',['slug' => str_slug($top1->name_place), 'id' => $top1->id_place]) }}">
                        <img src="/storage/app/files/datingplaces/{{$top1->picture}}" class="img-fluid" alt="">
                     </a>
                  </div>
                  <div class="blog-info-middle">
                     <ul>
                        <li>
                           <a href="{{ route('datingtonight.datingplaces.detail',['slug' => str_slug($top1->name_place), 'id' => $top1->id_place]) }}">
                              @php
                                 $date = $top1->date_created;
                                 $date_int = strtotime($date);
                                 //$date_format = date('d-month-Y',$date_int);
                                 //dd($date_int);
                                 $date_array = getdate($date_int);
                                 //dd($date_array);
                                 $month = $date_array['month'];
                                 $day = $date_array['mday'];
                                 $year = $date_array['year'];
                              @endphp
                              <i class="far fa-calendar-alt"></i> {{ $month }} {{ $day }}, {{ $year }}</a>
                        </li>
                        <li class="mx-2">
                           <a href="{{ route('datingtonight.datingplaces.detail',['slug' => str_slug($top1->name_place), 'id' => $top1->id_place]) }}">
                              <i class="far fa-thumbs-up"></i> {{$top1->count_number}} Views</a>
                        </li>
                        <li>
                           <a href="{{ route('datingtonight.datingplaces.detail',['slug' => str_slug($top1->name_place), 'id' => $top1->id_place]) }}">
                              <i class="far fa-comment"></i> 0 Comments</a>
                        </li>

                     </ul>
                  </div>
               </div>

               <h3>
                  <a href="{{ route('datingtonight.datingplaces.detail',['slug' => str_slug($top1->name_place), 'id' => $top1->id_place]) }}">[HOT HOT!!!] TOP 1 THE BEST PLACE TO DATING: {{$top1->name_place}} </a>
               </h3>
               <p>{!!$top1->preview_text!!}</p>
               <a href="{{ route('datingtonight.datingplaces.detail',['slug' => str_slug($top1->name_place), 'id' => $top1->id_place]) }}" class="btn btn-primary read-m">Read More</a>
            </div>
            @endforeach
            <!--//silder-->
            <div class="blog-mid-sec">
               <ul id="flexiselDemo2">
                  @foreach($getTop6 as $top6)
                  <li>
                     <div class="blog-item">
                        <img src="/storage/app/files/datingplaces/{{$top6->picture}}" alt=" " class="img-fluid" />
                        <button type="button" class="btn btn-primary play sec" data-toggle="modal" data-target="#exampleModal">
                           <i class="fas fa-play"></i>
                        </button>
                        <div class="floods-text">
                           <h3>{{$top6->name_place}}</h3>
                        </div>
                     </div>
                  </li>
                  @endforeach
               </ul>
            </div>

            <!--//silder-->
            <div class="blog-girds-sec">
               <div class="row">
                  @php
                     $count = 2;
                  @endphp
                  @foreach($getTop23 as $top23)
                  <div class="col-md-6 blog-grid-top">
                     <div class="b-grid-top">
                        <div class="blog_info_left_grid">
                           <a href="{{ route('datingtonight.datingplaces.detail',['slug' => str_slug($top23->name_place), 'id' => $top23->id_place]) }}">
                              <img src="/storage/app/files/datingplaces/{{$top23->picture}}" class="img-fluid" alt="">
                           </a>
                        </div>
                        <h3>
                           <a href="{{ route('datingtonight.datingplaces.detail',['slug' => str_slug($top23->name_place), 'id' => $top23->id_place]) }}">Top {{ $count }} Best Place : {{$top23->name_place}} </a>
                        </h3>
                        <p>{!!$top23->preview_text!!}</p>
                     </div>
                     <ul class="blog-icons">
                        @php
                           $date = $top23->date_created;
                           $date_int = strtotime($date);
                           //$date_format = date('d-month-Y',$date_int);
                           //dd($date_int);
                           $date_array = getdate($date_int);
                           //dd($date_array);
                           $month = $date_array['month'];
                           $day = $date_array['mday'];
                           $year = $date_array['year'];
                        @endphp
                        <li>
                           <a href="{{ route('datingtonight.datingplaces.detail',['slug' => str_slug($top23->name_place), 'id' => $top23->id_place]) }}">
                              <i class="far fa-clock"></i> {{ $month }} {{ $day }}, {{ $year }}</a>
                        </li>
                        <li class="mx-2">
                           <a href="{{ route('datingtonight.datingplaces.detail',['slug' => str_slug($top23->name_place), 'id' => $top23->id_place]) }}">
                              <i class="far fa-comment"></i> 0</a>
                        </li>
                        <li>
                           <a href="{{ route('datingtonight.datingplaces.detail',['slug' => str_slug($top23->name_place), 'id' => $top23->id_place]) }}">
                              <i class="fas fa-eye"></i> {{$top23->count_number}}</a>
                        </li>
                     </ul>
                  </div>
                  @php
                     $count++;
                  @endphp
                  @endforeach
               </div>
            </div>
         </div>
         <!--//left-->
         <!--right-->
         @include('datingtonight.index.right')
         <!--//right-->
      </div>
   </div>
</section>
<!--//main-->
<!--/middle-->
<section class="middle-sec-agileinfo-w3ls">
   <div class="container">
      <div class="row inner-sec">
         <div class="col-md-4 news-left">
            <ul id="demo1_thumbs" class="list-inline">
               @foreach($getTop4byDate as $top4bd)
               @php
                  $name = str_limit($top4bd->name_flirting,30,'...');
                  $url = route('datingtonight.flirtingmethods.detail',['slug' => str_slug($top4bd->name_flirting), 'id' => $top4bd->id]);
               @endphp
               <li>
                  <a href="/storage/app/files/flirtingmethods/{{$top4bd->image}}">
                     <img src="/storage/app/files/flirtingmethods/{{$top4bd->image}}" alt="This is an image" data-desoslide-caption="<a href='{{ $url }}' style='font-size:30px; color: white;'>{{$top4bd->name_flirting}}</a>">
                     <div class="mid-text-info">
                        <h4>{{$name}}</h4>
                        <p>{{$top4bd->author}} </p>
                        <div class="sub-meta">
                           <span>
                              <i class="far fa-clock"></i> 20 Feb, 2018</span>
                        </div>
                     </div>
                  </a>
               </li>
               @endforeach
            </ul>
         </div>
         <div id="demo1_main_image" class="col-md-8  news-right"></div>
         <div class="clearfix"> </div>
      </div>
   </div>
</section>
<!--//middle-->
<!---->
   <!--//main-->

<!---->
<!-- js -->
<script src="/templates/datingtonight/js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- desoslide-JavaScript -->
<script src="/templates/datingtonight/js/jquery.desoslide.js"></script>
<script>
   $('#demo1_thumbs').desoSlide({
      main: {
         container: '#demo1_main_image',
         cssClass: 'img-responsive'
      },
      effect: 'sideFade',
      caption: true
   });
</script>

<!-- requried-jsfiles-for owl -->
<script>
   $(window).load(function () {
      $("#flexiselDemo1").flexisel({
         visibleItems: 3,
         animationSpeed: 1000,
         autoPlay: true,
         autoPlaySpeed: 3000,
         pauseOnHover: true,
         enableResponsiveBreakpoints: true,
         responsiveBreakpoints: {
            portrait: {
               changePoint: 480,
               visibleItems: 1
            },
            landscape: {
               changePoint: 640,
               visibleItems: 2
            },
            tablet: {
               changePoint: 768,
               visibleItems: 3
            }
         }
      });

   });
</script>
<script>
   $(window).load(function () {
      $("#flexiselDemo2").flexisel({
         visibleItems: 3,
         animationSpeed: 1000,
         autoPlay: true,
         autoPlaySpeed: 3000,
         pauseOnHover: true,
         enableResponsiveBreakpoints: true,
         responsiveBreakpoints: {
            portrait: {
               changePoint: 480,
               visibleItems: 1
            },
            landscape: {
               changePoint: 640,
               visibleItems: 2
            },
            tablet: {
               changePoint: 768,
               visibleItems: 3
            }
         }
      });

   });
</script>
<script src="/templates/datingtonight/js/jquery.flexisel.js"></script>
<!-- //password-script -->
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

                        var defaults = {
                           containerID: 'toTop', // fading element id
                           containerHoverID: 'toTopHover', // fading element hover id
                           scrollSpeed: 1200,
                           easingType: 'linear' 
                        };

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