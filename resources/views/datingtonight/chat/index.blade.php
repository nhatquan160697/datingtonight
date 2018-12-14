@extends('templates.datingtonight.master')
@section('title')
	Messager
@endsection
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<div class="container">
<h3 class=" text-center">{{$toUser->Fullname}}</h3>
<div class="messaging">
      <div class="inbox_msg">
        {{-- <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Search" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div>
          </div>
          <div class="inbox_chat">
            <div class="chat_list active_chat">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
          </div>
        </div> --}}     
        <div class="mesgs">
          <div class="msg_history">
           
          	<?php 
              $urlTo='/storage/app/files/avatar/'.$toUser->Avatar;
              $urlFrom='/storage/app/files/avatar/'.$fromUser->Avatar;
            ?>
            <div id="app">
                <chat-component from-id="{{$fromID}}" to-id="{{$toID}}" url-to="{{$urlTo}}"></chat-component>
            </div>

            <script type="text/javascript">
            // Initialize Firebase
            window.firebaseConfig = {
                apiKey: "{{ config('services.firebase.api_key') }}",
                authDomain: "{{ config('services.firebase.auth_domain') }}",
                databaseURL: "{{ config('services.firebase.database_url') }}",
                storageBucket: "{{ config('services.firebase.storage_bucket') }}",
            };
            </script>
            {{ Html::script(asset('js/app.js')) }}

          </div>
          <div class="type_msg">
          	<form method="POST" action="{{route('datingtonight.chat.send',$toID)}}" id="input-form">
          		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
          		<div class="input_msg_write">
              		<input type="text" class="write_msg" placeholder="Type a message" name="content" id="ctn" />
              		<button type="submit" class="msg_send_btn" type="button" id="load-data">><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
            	</div>
              
              <script type="text/javascript">
                $('#input-form').on('submit',function(){
                  //$('#app').scrollTop($('#app')[0].scrollHeight)
                  //$(".msg_history").animate({ scrollTop: $(".msg_history")[0].scrollHeight}, 1000);
                  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                  var id='{{$toID}}';
                  $.post({
                    type:'POST',
                    data:{
                      _token: CSRF_TOKEN,
                      content:$("#ctn").val()
                    },
                    url:'/chat-{{$toID}}',
                    dataType:'String',
                    success:function(data){
                      console.log(data);                      
                    }
                  });
                  return false;
                });

              
                function clearInput() {
                  $("#input-form :input").each(function() {
                    $(this).val(''); //hide form values
                  });
                }
              </script>
          	</form>
          </div>
        </div>
      </div>
       <script type="text/javascript">
          $(document).ready(function() {

            // $('#history_message').animate({
            //   scrollTop: $('#history_message').get(0).scrollHeight
            // }, 5000);
            //$('#history_message').scrollTop($('#history_message')[0].scrollHeight);
          });   
        </script>
      <p class="text-center top_spac"> Design by <a target="_blank" href="#">The Dreamers Team</a></p>
</div>
</div>
@endsection

