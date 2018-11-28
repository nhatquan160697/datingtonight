<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>Dating Tonight - Admin</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Food Signin Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="/templates/admin/login-form/css/style.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <!-- //fonts -->
    <link rel="stylesheet" href="/templates/admin/login-form/css/font-awesome.css" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->

	<!-- Google fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- Google fonts -->

</head>
<!-- //Head -->
<!-- Body -->

<body>
    <h1 class="title-agile text-center"> Dating Tonight Admin Login</h1>
    <div class="content-w3ls">
        <div class="content-bottom">
			<h2>Sign In Here</h2>
            @php
                if(session()->has('checkAdmin')){
                    if(Route::has('auth.admin.login')){
                        $previous = url()->previous();
                        redirect()->to($previous)->send();
                    }
                }
            @endphp
            @if (Session::has('msg'))
                <p style="color: #fff; margin: -15px 0px 15px 0px">{{ Session::get('msg') }}</p>
            @endif

            {{-- @if ($errors->has('username') || $errors->has('password'))
                <span class="help-block" style="color: #fff">
                    <strong>{{ $errors->first('username') }}</strong>
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif --}}

            <form action="{{ route('auth.admin.login') }}" method="post">
                {{ csrf_field() }}
                <div class="field-group">
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="username" id="username" type="text" value="" placeholder="Username" required>
                    </div>
                </div>
                <div class="field-group">
                    <span class="fa fa-lock" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="password" id="password" type="Password" placeholder="Password">
                    </div>
                </div>
                <div class="wthree-field">
                    <input id="saveForm" name="saveForm" type="submit" value="sign in" />
                </div>
                <ul class="list-login">
                    <li class="switch-agileits">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                            keep signed in
                        </label>
                    </li>
                    <li>
                        <a href="#" class="text-right">forgot password?</a>
                    </li>
                    <li class="clearfix"></li>
                </ul>
            </form>
        </div>
    </div>
    <div class="copyright text-center">
        <p>© 2018 Dating Tonight Sign In. All rights reserved | Developed by The Dreamers and Design by
            <a href="http://w3layouts.com">W3layouts</a>
        </p>
    </div>
</body>
<!-- //Body -->
</html>
