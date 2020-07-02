
<?php
Use Carbon\carbon;

?>
@extends('layouts.admin_app')
@section('content')
<html>
<head>
<style>
body {
  margin:0px;
	padding:0px;
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 1;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  transition: margin-left .5s;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#main {
  transition: margin-left .5s;
  padding: 20px;
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 
  <a href=""> <?php echo "welocme"." ".Auth::user()->name?></a>;
  <a href="/profile">Profile</a>
  <a href="/viewbooks">Books</a>
  <a href="/viewreq">Book Request</a>
  <a href="/issueinfo">Issue Information</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
</script>
   

<div id="main">
  
        <div class="widget-box">
      
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>REQUEST BOOKS</h5>
   
          </div>
        
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ReturnDate</th>
                </tr>
              </thead>
              <tbody>
          
              @foreach($books as $books )
                <tr class="gradeX">
                  
                  
                  <td scope="row">{{$books ->returns}}</td>
                 
               
             
             
             
                <?php

                if($books->approve=='returned'){
                    echo "no fine u returned book";
                }
             if(Auth::user()->name){
            
             $days=0;          
       $now = Carbon::now()->toDateString();
    $datetime1 = strtotime($now);
  $datetime2 = strtotime($books->returns);
  
    $diff=$datetime1-$datetime2;
   

    
     
  $days=$days+floor($diff/(60*60*24)); 
               $fine=$days*0.1;
              echo "<h1>" ."your fine is "." "."$".$fine."</h1>";
             }
    
          ?>
               
                @endforeach
              </tbody>
            </table>
         
          </div>
         
        </div>
@endsection