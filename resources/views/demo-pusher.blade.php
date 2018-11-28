<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Pusher</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon/logo-trungquandev.png') }}" />
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css" media="screen">
      #messages{
        color: #1abc9c;
      }
      #messages li{
        max-width: 50%;
        margin-bottom:10px;
        border-color: #34495e;
      }
    </style>
</head>
<body>
    <div class="container">
      <div class="content">
        <h1>Laravel & Pusher: Demo real-time web application.</h1>
 
        <p>Message preview:</p>
          <ul id="messages" class="list-group"></ul>
      </div>
    </div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    <script>
      $(document).ready(function(){
        // Khởi tạo một đối tượng Pusher với app_key
        var pusher = new Pusher('ff828720003ec3d20e44', {
            cluster: 'ap1',
            encrypted: true
        });
 
        //Đăng ký với kênh chanel-demo-real-time mà ta đã tạo trong file DemoPusherEvent.php
        var channel = pusher.subscribe('channel-demo-real-time');
 
        //Bind một function addMesagePusher với sự kiện DemoPusherEvent
        channel.bind('App\\Events\\DemoPusherEvent', addMessageDemo);
      });
 
      //function add message
      function addMessageDemo(data) {
        var liTag = $("<li class='list-group-item'></li>");
        liTag.html(data.message);
        $('#messages').append(liTag);
      }
    </script>
</body>
</html>