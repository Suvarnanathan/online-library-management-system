<!DOCTYPE html>
<head>
<style>
.wrapper{
    height:500px;
    width:1000px;
    background-color:black;
    opacity:0.8;
    padding:10px;
}

</style>
</head>
</html>
@extends('layouts.admin_app')
@section('content')
<div class="col-1">
    &nbsp;
    </div>
<div class="col-6">
    
<div class="wrapper">
    <p style="color:white;">IF YOU HAVE ANY SUGGESTTIONS COMMENT BELOW</P>
<form method="post" action="/stufeedback/store">
    @csrf
  <div class="form-group">
  <input type="hidden" class="form-control" name="username" value="{{Auth::user()->name}}" >
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