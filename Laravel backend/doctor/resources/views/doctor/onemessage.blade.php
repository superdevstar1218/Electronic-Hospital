@extends('layouts.appdoctor')

@section('csscontent')
<style>
    .chatone{
        border: 0;
        padding: 10px 20px 10px 20px;
        border-radius: 5px;
        max-inline-size: min-content;
        min-width:70%;
        font-size:18px;
        background-color:white; 
        box-shadow: 1px 1px 3px 0 #dfdfdf;
        font-family: Iransansweb, sans-serif;
        font-size: 20px;
        font-weight: 400;
        color: #333;
    }
    .chattwo{
        border: 0;
        padding: 10px 20px 10px 10px;
        border-radius: 5px;
        max-inline-size: min-content;
        min-width:70%;
        font-size:18px;
        background-color:#eef7e9; 
        box-shadow: -8px 8px 15px -5px #b8b8b8;
        font-family: Iransansweb, sans-serif;
        font-size: 20px;
        font-weight: 400;
        color: #333;
    }
    </style>
@endsection
@section('content')

              <div class="col-lg">
                <div class="tabContentCol">
                  <div class="tab-content">
                  <div class="tab-pane fade show active">
                    <div class="tabheaderCol">
                      <h2><img src="{{asset('addbyme/images/message_white.png')}}" alt="..." style="width:40px;height:40px;">   تعديل الملف الشخصي</h2>
                    </div>
                    <div class="row" style="padding:10px 30px;">
                        <div class="col-md-2 col-5" style="display:flex;">
                        <img id="patient_photo" src="{{asset('upload/avata/'.$patient->photo)}}" alt="..." style="border-radius:100%;max-width:70px;height:70px;    border-style: ridge;">
                        <img src="{{asset('addbyme/images/verified.png')}}" alt="..." width="20px" height="20px" style="margin-right: 10px;margin-top: 10px;">
                        </div>
                        <div class="col-md-10 col-7" style="padding:inherit">{{$patient->name}}</div>
                    </div>
                    <div class="tabDetailCol" style="border-bottom: black;padding: 20px;    background-color:#fafafa;  max-height: 800px;overflow-y: scroll;overflow-x: hidden;direction: ltr;" id="sliberbox" >
                    <div class="row" style="direction: rtl;" id="chatbox">
                    <?php foreach($chats as $chat){?>
                        <?php if($chat->who == 0 && $chat->type == 'text'){?>
                                <div class="col-md-12" style="direction: ltr;">
                                    <p class="chatone">
                                    {{$chat->text}}</br><span style="font-size: small;color: rgba(51, 51, 51, 0.49);">{{$chat->created_at}} 
                                    <?php if($chat->status == "read"){?>
                                        <img src="{{asset('addbyme/images/read.png')}}" width="17px" alt="...">
                                    <?php } else {?>
                                        <img src="{{asset('addbyme/images/unread.png')}}" width="17px" alt="...">
                                    <?php }?></br>
                                    </span></p>
                                </div>
                        <?php } if($chat->who == 0 && $chat->type == 'audio'){?>
                                <div class="col-md-12" style="direction: ltr;">
                                    <p class="chatone">
                                    <a href="{{asset('upload/chat/' . $chat->text)}}" target="_blank">انقر هنا لتنزيل الرسالة الصوتية</a></br><span style="font-size: small;color: rgba(51, 51, 51, 0.49);">{{$chat->created_at}} 
                                    <?php if($chat->status == "read"){?>
                                        <img src="{{asset('addbyme/images/read.png')}}" width="17px" alt="...">
                                    <?php } else {?>
                                        <img src="{{asset('addbyme/images/unread.png')}}" width="17px" alt="...">
                                    <?php }?></br>
                                    </span></p>
                                </div>
                        <?php } if($chat->who == 0 && $chat->type != 'text' && $chat->type != 'audio'){?>
                                <div class="col-md-12" style="direction: ltr;">
                                    <p class="chatone">
                                    <img src="{{asset('upload/chat/'.$chat->text)}}"></br><span style="font-size: small;color: rgba(51, 51, 51, 0.49);">{{$chat->created_at}} 
                                    <?php if($chat->status == "read"){?>
                                        <img src="{{asset('addbyme/images/read.png')}}" width="17px" alt="...">
                                    <?php } else {?>
                                        <img src="{{asset('addbyme/images/unread.png')}}" width="17px" alt="...">
                                    <?php }?></br>
                                    </span></p>
                                </div>
                        <?php } if($chat->who == 1 && $chat->type == 'text'){?>
                                <div class="col-md-12">
                                    <p class="chattwo">
                                    {{$chat->text}}</br><span style="font-size: small;color: rgba(51, 51, 51, 0.49);">{{$chat->created_at}} 
                                    <?php if($chat->status == "read"){?>
                                        <img src="{{asset('addbyme/images/read.png')}}" width="17px" alt="...">
                                    <?php } else {?>
                                        <img src="{{asset('addbyme/images/unread.png')}}" width="17px" alt="...">
                                    <?php }?>
                                    </span></p>
                                </div>
                        <?php } if($chat->who == 1 && $chat->type == 'audio'){?>
                                <div class="col-md-12">
                                    <p class="chattwo">
                                    <a href="{{asset('upload/chat/' . $chat->text)}}" target="_blank">انقر هنا لتنزيل الرسالة الصوتية</a></br><span style="font-size: small;color: rgba(51, 51, 51, 0.49);">{{$chat->created_at}} 
                                    <?php if($chat->status == "read"){?>
                                        <img src="{{asset('addbyme/images/read.png')}}" width="17px" alt="...">
                                    <?php } else {?>
                                        <img src="{{asset('addbyme/images/unread.png')}}" width="17px" alt="...">
                                    <?php }?></br>
                                    </span></p>
                                </div>
                        <?php } if($chat->who == 1 && $chat->type != 'text' && $chat->type != 'audio'){?>
                                <div class="col-md-12">
                                    <p class="chattwo">
                                    <img src="{{asset('upload/chat/'.$chat->text)}}"></br><span style="font-size: small;color: rgba(51, 51, 51, 0.49);">{{$chat->created_at}} 
                                    <?php if($chat->status == "read"){?>
                                        <img src="{{asset('addbyme/images/read.png')}}" width="17px" alt="...">
                                    <?php } else {?>
                                        <img src="{{asset('addbyme/images/unread.png')}}" width="17px" alt="...">
                                    <?php }?></br>
                                    </span></p>
                                </div>
                    <?php } }?>
                    </div>
                    </div>
                    <input type="file" name="photo" style="display:none;"  data-input="false"  data-size="sm" data-badge="false"  accept="image/*">
                    <div id="send_text_file_div" class="tabDetailCol row" style="border-bottom: black;padding: 20px;">
                        <style>
                            #voicecall:hover {
                                width:50px;
                                height:50px;
                                transform: translate(0px, -2px);
                            }
                            #ignore_audio_record {
                                color:#007bff;
                            }
                            #ignore_audio_record:hover {
                                font-size: 20px;
                            }
                            #sendmessage:hover {
                                width:50px;
                                height:50px;
                                transform: translate(0px, -2px);
                            }                            
                            #sendmessage_audio:hover {
                                width:50px;
                                height:50px;
                                transform: translate(0px, -2px);
                            }
                            #bt_patient_image img:hover {
                                width:50px;
                                height:50px;
                                transform: translate(0px, -2px);
                            }
                            #btn_end_consulting:hover {
                                cursor: pointer;
                            }
                        </style>
                        <div class="col-md-2 col-12">
                            <div class="formStyle" style="display:flex">
                                <img src="{{asset('addbyme/images/voicecall.png')}}" width="40px" height="40px" alt="..." id="voicecall" style="margin-left:10px;">
                                <img src="{{asset('addbyme/images/sendmessage.png')}}" width="40px" height="40px" alt="..." id="sendmessage" style="margin-left:10px;">
                            </div>
                        </div>
                        <div class="col-md-10 col-12">
                            <div class="formStyle">
                                <a id="bt_patient_image" style="position: absolute; top: 5px; left: 5px;"><img src="{{asset('addbyme/images/attach.png')}}" width="40px" height="40px" alt="..." ></a>
                                <textarea  class="form-control"  placeholder="" name="name" placeholder="Text" required style="height:50px;font-size:18px;padding-left:50px;border-radius:5px;padding-top: 10px;border-radius: 5px;border: solid 2px #c7c7c7;" id="messagetext"></textarea>
                            </div>
                        </div>
                        <div class="col-md-8 col-12"style="margin-top: 20px;">
                            <div class="formStyle">
                                <input type="input" class="form-control" id="filename"  placeholder=""required readonly style="height:50px;font-size:18px;padding-left:50px;border-radius:5px;padding-top: 10px;border-radius: 5px;border: solid 2px #c7c7c7;">
                            </div>
                        </div>
                        <div class="col-md-4 col-12" style="margin-top: 20px;">
                            <div class="formStyle">
                            <a id="btn_end_consulting" data-toggle="modal" data-target="#testmodal3" class="form-control text-center"  placeholder="" name="name" value="" required style="padding-top: 10px;background-color:#3898EC;font-size:20px;border:none;height:50px;border-radius:5px;color:white"><p>ﺍﻧﻬﺎﺀ ﺍﻻﺳﺘﺸﺎﺭﺓ</p></a>
                            </div>
                        </div>
                    </div>
                    <div id="send_audio_div" class="tabDetailCol row" style="border-bottom: black;padding: 50px;display:none;">
                        <div style="line-height: 3rem;position: absolute;left: 50px;">
                            Recording<span id="recording_span"></span>
                            <a id="ignore_audio_record"><i class="fa fa-close" style="margin-right:2rem;"></i></a>
                        </div>
                        <div>
                            <img src="{{asset('addbyme/images/sendmessage.png')}}" width="40px" height="40px" alt="..." id="sendmessage_audio" style="margin-left:10px;">
                        </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              <input type="hidden" value="{{$consultant_id}}" id="saveid">
              <input type="hidden" value="0" id="focusone">

              <div id="testmodal3" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content" style="width:fit-content; padding:20px 50px;">
                        <div class="modal-body text-center">
                            <p style="margin-top:18px; margin-bottom:30px;">ﻗﻢ ﺑﺘﺄﻛﻴﺪ ﺍﻧﻬﺎﺀ ﺍﻻﺳﺘﺸﺎﺭﺓ</p>
                            <form id="feedback_form" class="appCol"  method="POST" action="{{url('dgivefeedback')}}">
                                @csrf
                                <input type="hidden" value="{{$consultant_id}}" name="consultant_id" id="saveid">
                                <button class="btn" id="btn_submit_feedback" data-dismiss="modal" aria-label="Close" style="color:white;width:130px;border-radius:20px; background:#F44336; margin-left:10px">ﺍﻧﻬﺎﺀ ﺍﻻﺳﺘﺸﺎﺭﺓ</button>
                                <button class="btn" data-dismiss="modal" aria-label="Close" style="color:white;width:130px;border-radius:20px; background:#1861CE;">ﺍﻟﻐﺎﺀ ﺍﻷﻣﺮ</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
                <div id="modal_patientphoto" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content" style="width:fit-content; padding:20px 50px;">
                            <img src="{{asset('upload/avata/'.$patient->photo)}}" alt="...">
                        <div class="modal-body text-center">
                        </div>
                        </div>
                    </div>
                </div>
@endsection
@section('jscontent')
    <script>
    // variables for audio record
    var audio_stopped = true;
    var audio_shouldStop = false;
    var recordedChunks = [];
    var options = {mimeType: 'audio/webm'};
    var mediaRecorder;

    const handleSuccess = function(stream) {
        mediaRecorder = new MediaRecorder(stream, options);
        
        mediaRecorder.addEventListener('dataavailable', function(e) {
            recordedChunks.push(e.data);
        });
    };

    const handleError = function(err) {
        console.log(err);
        $('#voicecall').hide();
    };

    navigator.mediaDevices.getUserMedia({ audio: true, video: false }).then(handleSuccess).catch(handleError);

    $('#sendmessage_audio').on('click', function() {
        mediaRecorder.stop();

        $('#send_text_file_div').show();
        $('#send_audio_div').hide();

        var html = '';
        html +='<div class="col-md-12">';
        html +='<p class="chattwo">Voice message</p>';
        html +='</div>';
        $('#chatbox').append(html);
        
        audioBlob = new Blob(recordedChunks, {type:'audio/webm'});

        var dataimg = new FormData();
        dataimg.append("consultant_id", $('#saveid').val());
        dataimg.append("text", audioBlob);
        dataimg.append("type", 'audio');
        dataimg.append("_token", $('meta[name="csrf-token"]').attr('content'));
        $.ajax({
            type:'post',
            url:'/dsavechatone',
            cache : false,
            contentType : false,
            processType : false,
            processData: false,
            data: dataimg,
            success:function(data) {
                var objDiv = document.getElementById("sliberbox");
                objDiv.scrollTop = objDiv.scrollHeight;             
            },
            failure:function(){
            }
        });

        recordedChunks = [];
    });

    // Animation for 'Recording....'
    var i = 0;
    var txt = '...';
    var speed = 500;
    typeWriter();
    function typeWriter() {
        if (i < txt.length) {
            $('#recording_span').html($('#recording_span').html() + txt.charAt(i));
            i++;
        }
        else {
            i = 0;
            $('#recording_span').html('');
        }
        setTimeout(typeWriter, speed);
    }

    $('#patient_photo').click(function() {
        $('#modal_patientphoto').modal('show');
    });

    var objDiv = document.getElementById("sliberbox");
    objDiv.scrollTop = objDiv.scrollHeight;
    $('#btn_submit_feedback').click(function() {
        $('#feedback_form').submit();
    });
    $('#messagetext').click(function() { 
        $.ajax({
            type:'post',
            url:'/dsetallstatus',
            data: {
                "consultant_id":  $('#saveid').val(),
                "_token": $('meta[name="csrf-token"]').attr('content'),
            },
            success:function(data) { 
            },
            failure:function(){
            }
        });
     });
    $( "#messagetext" ).keyup(function() {
        $.ajax({
            type:'post',
            url:'/dsetallstatus',
            data: {
                "consultant_id":  $('#saveid').val(),
                "_token": $('meta[name="csrf-token"]').attr('content'),
            },
            success:function(data) { 
            },
            failure:function(){
            }
        });
    });
    $('#bt_doctor_image').on('click',function(){
        $('input[name="photo"]').click();
    });
    $('input[name="photo"]').on('change',function(e){
        var file = e.target.files[0];
        var reader = new FileReader();
        reader.onloadend =function(){
            $('#filename').val(file.name);
        }
        reader.readAsDataURL(file);     
    });
    $('#voicecall').on('click', function() {
        $('#send_text_file_div').hide();
        $('#send_audio_div').show();
        mediaRecorder.start(200);
    });
    $('#ignore_audio_record').on('click', function() {
        $('#send_audio_div').hide();
        $('#send_text_file_div').show();
        
        mediaRecorder.stop();
        recordedChunks = [];
    })
    $('#sendmessage').on('click',function(){
        if($('#messagetext').val() != '')
        {
            var html = '';
            html += '<div class="col-md-12">';
            html += '<p class="chattwo">'+$('#messagetext').val()+'</p>';
            html += '</div>';
            $('#chatbox').append(html);
            var objDiv = document.getElementById("sliberbox");
            objDiv.scrollTop = objDiv.scrollHeight;  
            $.ajax({
                type:'post',
                url:'/dsavechatone',
                data: {
                    "consultant_id":  $('#saveid').val(),
                    "text":  $('#messagetext').val(),
                    "type":  'text',
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                },
                success:function(data) { 
                    console.log(data);
                    $('#messagetext').val('');               
                },
                failure:function(){
                }
            });
        }
        if($('#filename').val() !='')
        {
            var dataimg = new FormData();
            dataimg.append("consultant_id", $('#saveid').val());
            dataimg.append("text", $('input[name="photo"]')[0].files[0]);
            dataimg.append("type", $('#filename').val());
            dataimg.append("_token", $('meta[name="csrf-token"]').attr('content'));
            $.ajax({
                type:'post',
                url:'/dsavechatone',
                cache : false,
                contentType : false,
                processType : false,
                processData: false,
                data: dataimg,
                success:function(data) { 
                    console.log(data);
                    var html = '';
                    html +='<div class="col-md-12">';
                    html +='<p class="chattwo"><img src="{{url('')}}/upload/chat/'+data+'" ></p>';
                    html +='</div>';
                    $('#filename').val('');
                    $('#chatbox').append(html); 
                    var objDiv = document.getElementById("sliberbox");
                    objDiv.scrollTop = objDiv.scrollHeight; 
                                   
                },
                failure:function(){
                }
            });
        }
    })
    
$(document).ready(function() {
    setInterval(function(){
        $.ajax({
            type:'post',
            url:'/dgetchat',
            data: {
                "consultant_id":  $('#saveid').val(),
                "_token": $('meta[name="csrf-token"]').attr('content'),
            },
            success:function(e) { 
                var response = JSON.parse(e);
                var data = response['chats'];
                var cur_time = response['cur_time'];
                
                var isNew = false;
                var html ="";

                for(var i =0;i<data.length;i++)
                {
                    if(data[i]['who'] == 0 && data[i]['type'] == 'text'){
                        var start = new Date(data[i]['created_at']);
                        end   = new Date(cur_time);
                        diff  = new Date(end - start);
                        diff  /= 1000;
                        if (diff >=0 && diff < 10) isNew = true;

                        html +='<div class="col-md-12"  style="direction: ltr;">';
                        html +='<p class="chatone">'+data[i]['text']+'</br><span style="font-size: small;color: rgba(51, 51, 51, 0.49);">'+data[i]['created_at'] + ' ';
                           if(data[i]['status'] == "read")
                           html +='<img src="{{url('')}}/addbyme/images/read.png" width="17px" alt="...">';
                           else
                           html +='<img src="{{url('')}}/addbyme/images/unread.png" width="17px" alt="...">';
                        
                        html +='</span></p>';
                        html +='</div>';
                    }
                    if(data[i]['who'] == 0 && data[i]['type'] == 'audio'){
                        var start = new Date(data[i]['created_at']);
                        end   = new Date(cur_time);
                        diff  = new Date(end - start);
                        diff  /= 1000;
                        if (diff >=0 && diff < 10) isNew = true;
                        
                        html +='<div class="col-md-12" style="direction: ltr;">';
                        html +='<p class="chatone"><a href="{{url('')}}/upload/chat/'+data[i]['text']+'" target="_blank">انقر هنا لتنزيل الرسالة الصوتية</a>' + '</br><span style="font-size: small;color: rgba(51, 51, 51, 0.49);">'+data[i]['created_at'] + ' ';
                           if(data[i]['status'] == "read")
                           html +='<img src="{{url('')}}/addbyme/images/read.png" width="17px" alt="...">';
                           else
                           html +='<img src="{{url('')}}/addbyme/images/unread.png" width="17px" alt="...">';
                        
                        html +='</span></p>';
                        html +='</div>';
                    }
                    if(data[i]['who'] == 0 && data[i]['type'] != 'text' && data[i]['type'] != 'audio'){
                        var start = new Date(data[i]['created_at']);
                        end   = new Date(cur_time);
                        diff  = new Date(end - start);
                        diff  /= 1000;
                        if (diff >=0 && diff < 10) isNew = true;

                        html +='<div class="col-md-12"  style="direction: ltr;">';
                        html +='<p class="chatone"><img src="{{url('')}}/upload/chat/'+data[i]['text']+'" download></br><span style="font-size: small;color: rgba(51, 51, 51, 0.49);">'+data[i]['created_at'] + ' ';
                           if(data[i]['status'] == "read")
                           html +='<img src="{{url('')}}/addbyme/images/read.png" width="17px" alt="...">';
                           else
                           html +='<img src="{{url('')}}/addbyme/images/unread.png" width="17px" alt="...">';
                        
                        html +='</span></p>';
                        html +='</div>';
                    }
                    if(data[i]['who'] == 1 && data[i]['type'] == 'text'){
                        html +='<div class="col-md-12">';
                        html +='<p class="chattwo">'+data[i]['text']+'</br><span style="font-size: small;color: rgba(51, 51, 51, 0.49);">'+data[i]['created_at'] + ' ';
                            if(data[i]['status'] == "read")
                           html +='<img src="{{url('')}}/addbyme/images/read.png" width="17px" alt="...">';
                           else
                           html +='<img src="{{url('')}}/addbyme/images/unread.png" width="17px" alt="...">';
                        
                        html +='</span></p>';
                        html +='</div>';
                    }
                    if(data[i]['who'] == 1 && data[i]['type'] == 'audio'){                        
                        html +='<div class="col-md-12">';
                        html +='<p class="chattwo"><a href="{{url('')}}/upload/chat/'+data[i]['text']+'" target="_blank">انقر هنا لتنزيل الرسالة الصوتية</a>' + '</br><span style="font-size: small;color: rgba(51, 51, 51, 0.49);">'+data[i]['created_at'] + ' ';
                           if(data[i]['status'] == "read")
                           html +='<img src="{{url('')}}/addbyme/images/read.png" width="17px" alt="...">';
                           else
                           html +='<img src="{{url('')}}/addbyme/images/unread.png" width="17px" alt="...">';
                        
                        html +='</span></p>';
                        html +='</div>';
                    }
                    if(data[i]['who'] == 1 && data[i]['type'] != 'text' && data[i]['type'] != 'audio'){
                        html +='<div class="col-md-12">';
                        html +='<p class="chattwo"><img src="{{url('')}}/upload/chat/'+data[i]['text']+'"></br><span style="font-size: small;color: rgba(51, 51, 51, 0.49);">'+data[i]['created_at'] + ' ';
                            if(data[i]['status'] == "read")
                           html +='<img src="{{url('')}}/addbyme/images/read.png" width="17px" alt="...">';
                           else
                           html +='<img src="{{url('')}}/addbyme/images/unread.png" width="17px" alt="...">';
                        
                        html +='</span></p>';
                        html +='</div>';
                    }
                }

                if (isNew == true)
                {
                    var audioElement = document.createElement('audio');
                    audioElement.setAttribute('src', '{{asset("addbyme/audio/alert.mp3")}}');
                    audioElement.play();
                }

                $("#chatbox").empty();
                $("#chatbox").append(html); 
                if($('#focusone').val() != data.length)
                {
                    $('#focusone').val(data.length);
                    var objDiv = document.getElementById("sliberbox");
                    objDiv.scrollTop = objDiv.scrollHeight;
                }
            },
            failure:function(){
            }
        });
    },3000); 
    setInterval(function(){
                $.ajax({
                    type: "GET",
                    url: '/getdunreadmessage',
                    success: function(data){
                        $('.unreadcount').text(data);
                    }
                });
    },3000);       
});
    </script>
@endsection

