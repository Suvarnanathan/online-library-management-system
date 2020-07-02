<!DOCTYPE html>
<head>
    <style>
        .wrapper{
            width:1000px;
            height:600px;
            opacity:0.8;
            color:white;
            background-color:black;
            padding:50px;
            
        }
       
        </style>
</head>
<body background="{{asset('images/feedback.jpg')}}">
</body>
</html>
@extends('layouts.adminlayout.admin_design')


@section('content')



<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>  <a href="/feedback" class="current">feedback</a> </div>
        <h1>FEEDBACK</h1>
</div>
<div class="col-1">
    &nbsp;
    </div>
<div class="col-6">
    
<div class="wrapper">
    <p>IF YOU HAVE ANY SUGGESTTIONS COMMENT BELOW</P>
<form method="post" action="/feedback/store">
    @csrf
  <div class="form-group">
  <input type="hidden" class="form-control" name="name"  value="Admin">
    <input type="text" class="form-control" name="comments" id="comments"style="height:60px;width:80%;" placeholder="Enter">
  </div>
  
  <button type="submit" class="btn btn-secondary">submit</button>
</form>
<br>
<div>
       
            <table class="table table-bordered data-table">
              
              <tbody>
              @foreach($fed as $fed)
                <tr class="gradeX">
                <td style="color:red;font-size:20px;">{{$fed->username}}</td>
                  <td style="color:red;font-size:20px;">{{$fed->comment}}</td>
                </tr>

                @endforeach
              </tbody>
              
            </table>
          
          </div>
</div>
</div>
<div class="col-4">
    &nbsp;
    </div>
    </div>
@endsection
