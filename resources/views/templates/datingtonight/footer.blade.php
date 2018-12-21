{{-- Comment --}}
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=350829552332404&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
{{-- Endcomment --}}
{{-- Chatbot --}}
<script>
  (function () {
    let appCode = '754a19c0e8bdc3beb5b9b91ca80d8c23';
    let ws_host = 'wss://bot.fpt.ai/ws/livechat'
    let appCodeHash = window.location.hash.substr(1);
    let objLiveChat = {
        appCode: '754a19c0e8bdc3beb5b9b91ca80d8c23',
        appName: 'Dating Tonight Botchat'
    };
    if (appCodeHash.length == 32) {
      objLiveChat.appCode = appCodeHash;
    }

    var baseUrl = 'https://static.fpt.ai/v3/src';
    var r = document.createElement("script");
    r.src = baseUrl + "/livechat.js";
    var c = document.getElementsByTagName("body")[0];
    c.appendChild(r);
    r.onload = function () {
      new FPTAI_LiveChat(objLiveChat, baseUrl, ws_host);
    };
  })()
</script>
{{-- Endchatbot --}}

<!--footer-->
   <footer>
      <div class="container">
         <div class="row">
            <div class="col-lg-4 footer-grid-agileits-w3ls text-left">
               <h3>About US</h3>
               <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. lacinia eget consectetur sed, convallis at tellus..</p>
               <div class="read">
                  <a href="single.html" class="btn btn-primary read-m">Read More</a>
               </div>
            </div>
            <div class="col-lg-4 footer-grid-agileits-w3ls text-left">

               <div class="tech-btm">
                  <h3>Latest Posts</h3>
                  <div class="blog-grids row mb-3">
                     <div class="col-md-5 blog-grid-left">
                        <a href="single.html">
                           <img src="/templates/datingtonight/images/4.jpg" class="img-fluid" alt="">
                        </a>
                     </div>
                     <div class="col-md-7 blog-grid-right">

                        <h5>
                           <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                        </h5>
                        <div class="sub-meta">
                           <span>
                              <i class="far fa-clock"></i> 20 Jan, 2018</span>
                        </div>
                     </div>

                  </div>
                  <div class="blog-grids row mb-3">
                     <div class="col-md-5 blog-grid-left">
                        <a href="single.html">
                           <img src="/templates/datingtonight/images/5.jpg" class="img-fluid" alt="">
                        </a>
                     </div>
                     <div class="col-md-7 blog-grid-right">

                        <h5>
                           <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                        </h5>
                        <div class="sub-meta">
                           <span>
                              <i class="far fa-clock"></i> 20 Jan, 2018</span>
                        </div>
                     </div>

                  </div>
                  <div class="blog-grids row mb-3">
                     <div class="col-md-5 blog-grid-left">
                        <a href="single.html">
                           <img src="/templates/datingtonight/images/6.jpg" class="img-fluid" alt="">
                        </a>
                     </div>
                     <div class="col-md-7 blog-grid-right">

                        <h5>
                           <a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
                        </h5>
                        <div class="sub-meta">
                           <span>
                              <i class="far fa-clock"></i> 20 Jan, 2018</span>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
            <!-- subscribe -->
            <div class="col-lg-4 subscribe-main footer-grid-agileits-w3ls text-left">
               <h2>Signup to our newsletter</h2>
               <div class="subscribe-main text-left">
                     <div class="subscribe-form">
                           <form action="#" method="post" class="subscribe_form">
                              <input class="form-control" type="email" placeholder="Enter your email..." required="">
                              <button type="submit" class="btn btn-primary submit">Submit</button>
                           </form>
                           <div class="clearfix"> </div>
                     </div>
                  <p>We respect your privacy.No spam ever!</p>
               </div>
               <!-- //subscribe -->
            </div>
         </div>
         <!-- footer -->
         <div class="footer-cpy text-center">
            <div class="footer-social">
               <div class="copyrighttop">
                  <ul>
                     <li class="mx-3">
                        <a class="facebook" href="#">
                           <i class="fab fa-facebook-f"></i>
                           <span>Facebook</span>
                        </a>
                     </li>
                     <li>
                        <a class="facebook" href="#">
                           <i class="fab fa-twitter"></i>
                           <span>Twitter</span>
                        </a>
                     </li>
                     <li class="mx-3">
                        <a class="facebook" href="#">
                           <i class="fab fa-google-plus-g"></i>
                           <span>Google+</span>
                        </a>
                     </li>
                     <li>
                        <a class="facebook" href="#">
                           <i class="fab fa-pinterest-p"></i>
                           <span>Pinterest</span>
                        </a>
                     </li>
                  </ul>

               </div>
            </div>
            <div class="w3layouts-agile-copyrightbottom">
               <p>© 2018 Weblog. All Rights Reserved | Design by
                  <a href="http://w3layouts.com/">W3layouts</a>
               </p>

            </div>
         </div>

         <!-- //footer -->
      </div>
   </footer>
   <script type="text/javascript" charset="utf-8">
      $(document).ready(function(){
        $('.nav-item').click(function(){
          $('.nav-item').removeClass("active");
          $(this).addClass("active");
      });
      });
   </script>