@extends('templates.datingtonight.master')
@section('title')
   About us
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="/templates/datingtonight/formAbout/css/style.css">
<!------ Include the above in your HEAD tag ---------->
<section class="our-webcoderskull padding-lg">
  <div class="container">
    <div class="row heading heading-icon">
        <h2>Our Team</h2>
    </div>
    <ul class="row">
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="public/templates/datingtonight/images/thayJan.jpg" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">JAN SAMUELSSON</a></h3>
            <p>Mentor, teacher of Duy Tan University</p>
            <ul class="follow-us clearfix">
              <li><a href="https://www.facebook.com/profile.php?id=100006277428022&lst=100009009884703%3A100006277428022%3A1544971318&sk=about&section=education"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              
            </ul>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="public/templates/datingtonight/images/quan3.jpg" class="img-responsive" alt=""></figure>
            <h3><a href="#">TON THAT NHAT QUAN</a></h3>
            <p>Scrum Master, learning SE at Duy Tan University</p>
            <ul class="follow-us clearfix">
              <li><a href="https://www.facebook.com/TonThatNhatQuan"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
             
            </ul>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="public/templates/datingtonight/images/tan.jpg" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">DAM HO DUY TAN</a></h3>
            <p>Developer, learning SE at Duy Tan University</p>
            <ul class="follow-us clearfix">
              <li><a href="https://www.facebook.com/forddien"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              
            </ul>
          </div>
       </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="public/templates/datingtonight/images/yen.jpg" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">TRAN THI TO YEN</a></h3>
            <p>Product Owner, learning MIS at Duy Tan University</p>
            <ul class="follow-us clearfix">
              <li><a href="https://www.facebook.com/toyen1997"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
             
            </ul>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="public/templates/datingtonight/images/tai.jpg" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">DANG PHUOC TAI</a></h3>
            <p>Developer, learning SE at Duy Tan University</p>
            <ul class="follow-us clearfix">
              <li><a href="https://www.facebook.com/profile.php?id=100004637684024&epa=SEARCH_BOX"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
             
            </ul>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="public/templates/datingtonight/images/van.jpg" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">LE ANH VAN</a></h3>
            <p>Developer, learning SE at Duy Tan University</p>
            <ul class="follow-us clearfix">
              <li><a href="https://www.facebook.com/profile.php?id=100006105375344&epa=SEARCH_BOX"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
             
            </ul>
          </div>
      </li>
    </ul>
  </div>
</section>

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