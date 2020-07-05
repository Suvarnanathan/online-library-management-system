<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

</head>
</html>
@extends('layouts.adminlayout.admin_design')
@section('content')
       <div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="/viewreqinfo" class="current">REQUESTDETAILS</a> </div>
    <h1>REQUEST DETAILS</h1>
  </div>

  

 
<div class="widget-content" style="width:1000px;background-color:black;opacity:0.8;height:500px;padding:80px;">
            <caption><center><p style="color:white;">REQUESTED DETAILS</p></center></caption>
                <table class="table table-bordered table-striped" id="table">
          
              <thead>
                <tr>
                <th>USERNAME</th>
                  <th>Book ID</th>
                  <th>BOOK NAME</th>
                  <th>AUTHORS</th>
                  <th>EDITION</th>
                  <th>STATUS</th>
                  <th>EDIT</th>
                  
                </tr>
              </thead>
              <tbody>
              @foreach($books as $books )
                <tr class="gradeX" >
               
                  
                <td scope="row" id="row" >{{$books ->username}}</td>
                <td scope="row">{{$books ->bid}}</td>
                <td scope="row">{{$books ->name}}</td>
                <td scope="row">{{$books ->authors}}</td>
                <td scope="row">{{$books ->edition}}</td>
                <td scope="row">{{$books ->status}}</td>
                <td scope="row"> <button>Remove</button></td>
               
                 
                </tr>
               
                @endforeach
              </tbody>
              </table>
              
              <script type="text/javascript">
              $(function(){
                $('table').on('click', 'td', function(){
		$(this).parent().children().css({
			'background-color':'red'
		});
    window.location="http://127.0.0.1:8000/approved";
	});
});
  
  
</script>

          </div>
         
@endsection