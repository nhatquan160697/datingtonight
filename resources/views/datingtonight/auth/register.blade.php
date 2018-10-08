<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome to Dating Tonight</title>
  <link rel="stylesheet" href="/templates/datingtonight/formRegister/styles.css">
</head>
<body>
  <!-- header starts here -->
  <div id="facebook-Bar">
    <div id="facebook-Frame">
      <div id="logo"> <a href="" title=""><img src="/storage/app/files/logo/logo4.jpg" alt="Logo is here"></a> </div>
      <div id="header-main-right">
        <div id="header-main-right-nav">
          <form method="post" action="" id="login_form" name="login_form">
            <table border="0" style="border:none">
              <tr>
                <td ><input type="text" tabindex="1"  id="email" placeholder="Email or Phone" name="email" class="inputtext radius1" value=""></td>
                <td ><input type="password" tabindex="2" id="pass" placeholder="Password" name="pass" class="inputtext radius1" ></td>
                <td ><input type="submit" class="fbbutton" name="login" value="Login" /></td>
              </tr>
              <tr>
                <td><label>
                    <input id="persist_box" type="checkbox" name="persistent" value="1" checked="1"/>
                    <span style="color:#ccc;">Keep me logged in</span></label></td>
                <td><label><a href="" style="color:#ccc; text-decoration:none">forgot your password?</a></label></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- header ends here -->
  <div class="loginbox radius">
    <h2 style="color:#141823; text-align:center;">Welcome to Dating Tonight</h2>
    <div class="loginboxinner radius">
      <div class="loginheader">
        <h4 class="title">Connect with friends and the world around you.</h4>
      </div>
      <!--loginheader-->
      <div class="loginform">
        <form id="login" action="" method="post">
          <p>
            <input type="text" id="firstname" name="firstname" placeholder="First Name" value="" class="radius mini" />
            <input type="text" id="lastname" name="lastname" placeholder="Last Name" value="" class="radius mini" />
          </p>
          <p>
            <input type="text" id="email" name="email" placeholder="Your Email" value="" class="radius" />
          </p>
          <p>
            <input type="text" id="remail" name="remail" placeholder="Re-enter Email" class="radius" />
          </p>
          <p>
            <input type="password" id="password" name="password" placeholder="New Password" class="radius" />
          </p>
          <p>
            <button class="radius title" name="signup">Sign Up for Dating Tonight</button>
          </p>
        </form>
      </div>
      <!--loginform-->
    </div>
    <!--loginboxinner-->
  </div>
  <!--loginbox-->
</body>
</html>