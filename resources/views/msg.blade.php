<!DOCTYPE html>
<head>
<style>
body{
    background-image:url('https://cdn.hipwallpaper.com/i/43/22/fOjaM1.jpg');

}
.wrapper{
    margin-left:400px;
    width:500px;
    height:600px;
    background-color:black;
    opacity:0.9;
    margin:-20px auto;
    padding:10px;
}
.wrapper h3{
    background-color:#2eac8b;
    height:50px;
    color:white;
    text-align:center;
    font-size:20px;
   width:100%;
    
}
.formcontrol{
    height:40px;
    width:77%;
}
input[type="submit"]{
    height:40px;
    width:22%;
    margin-top:-3px;
  
}
p{
    color:white;
}
.msg{
    height:450px;
    overflow-y:scroll;
}
.chat{
    display:flex;
    flex-flow:row wrap;

}
.user .chatbox{
    height:50px;
    width:360px;
    padding:13px 10px;
    border-radius:10px;
    color:white;
}
.admin .chatbox{
    height:50px;
    width:380px;
    padding:13px 10px;
   
    border-radius:10px;
    
}
</style>
</head>
</html>
@extends('layouts.admin_app')
@section('content')
<div class="wrapper">
<h3>Admin</h3>
<div class="msg">
<br>
<div class="chat user">
<div style="float:left;padding-top:5px;color:white;font-size:20px;">


</div>
<div style="float:left;" class="chatbox">
@foreach($msgs as $msg)



@if($msg->sender=='student')
<h5 style="order:-1;float:left;color:white;">{{$msg->username}}</h5>
<h5 style="height:50px;
    width:300px;
    padding:13px 10px;
    background-color:#821b69;
    border-radius:10px;
    order:-1;
    color:white;
    float:left;">{{$msg->message}}</h5>
    
<br>
<br>
</div>
</div>
<br>
<br>

<div class="chat admin">
<div style="float:left;padding-top:5px;color:white;font-size:20px;">
</div>
<br>
<div style="float:left;" class="chatbox">
@else
<h5 style="color:white;">Admin</h5>
<h5 style="height:50px;
    width:300px;
    padding:13px 10px;
    background-color:#423471;
    border-radius:10px;
    color:white;">{{$msg->message}}</h5>

<br>
<br>
@endif
@endforeach
</div>

</div>


</div>
<div style="height:100px;padding-top:10px;">
<form action="/inbox/store" method="get">
@csrf
<input type="hidden"   name="name"  value="{{Auth::user()->name}}">
<input type="text" name="msg" placeholder="write message here....."class="formcontrol" required>
<input type="submit" value="send" name="submit" class="btn btn-info btn-lg">
<input type="hidden" value="no" name="status" >
<input type="hidden" value="student" name="sender">
</form>
</div>
</div>
@endsection