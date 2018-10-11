<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome to Dating Tonight</title>
  <link href="/templates/datingtonight/formRegister/styles.css" type="text/css" rel="stylesheet" />
</head>
<body>
  <!-- header starts here -->
  <div id="facebook-Bar">
    <div id="facebook-Frame">
      <div id="logo"> <a href="" title=""><img src="/templates/datingtonight/images/logo/logo.png" alt="Logo is here"></a> </div>
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
  <div class="image">
    <img  class ="img" src="images/background.jpg" />
  </div>
  <div class="loginbox radius" style="margin-right:118px" >
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
      <label class ="gender">Gender:</label>
      <input type="radio" id="Male" name="gender" value="radio"/>Male 
      <input type="radio" id="Female" name="gender" value="radio"/>Female
           </p> 
      <p>
      <label>Birthdate *
      </label>
      <select class="date">
        <option value="1">01
        </option>
        <option value="2">02
        </option>
        <option value="3">03
        </option>
        <option value="4">04
        </option>
        <option value="5">05
        </option>
        <option value="6">06
        </option>
        <option value="7">07
        </option>
        <option value="8">08
        </option>
        <option value="9">09
        </option>
        <option value="10">10
        </option>
        <option value="11">11
        </option>
        <option value="12">12
        </option>
        <option value="13">13
        </option>
        <option value="14">14
        </option>
        <option value="15">15
        </option>
        <option value="16">16
        </option>
        <option value="17">17
        </option>
        <option value="18">18
        </option>
        <option value="19">19
        </option>
        <option value="20">20
        </option>
        <option value="21">21
        </option>
        <option value="22">22
        </option>
        <option value="23">23
        </option>
        <option value="24">24
        </option>
        <option value="25">25
        </option>
        <option value="26">26
        </option>
        <option value="27">27
        </option>
        <option value="28">28
        </option>
        <option value="29">29
        </option>
        <option value="30">30
        </option>
        <option value="31">31
        </option>
      </select>
      <select>
        <option value="1">January
        </option>
        <option value="2">February
        </option>
        <option value="3">March
        </option>
        <option value="4">April
        </option>
        <option value="5">May
        </option>
        <option value="6">June
        </option>
        <option value="7">July
        </option>
        <option value="8">August
        </option>
        <option value="9">September
        </option>
        <option value="10">October
        </option>
        <option value="11">November
        </option>
        <option value="12">December
        </option>
      </select>
      <input class="year" type="text" size="4" maxlength="4"/>
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
            <input type="password" id="password" name="repassword" placeholder="Confirm Password" class="radius" />
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