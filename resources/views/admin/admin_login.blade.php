
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body background="https://png.pngtree.com/thumb_back/fw800/back_pic/00/11/26/5356376b0b393f6.jpg" style="background-size:cover;">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 40%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</body>
</html>
@extends('layouts.admin_app')
@section('content')
<?php
session_start();


$conn=mysqli_connect("localhost","root","","librarysis");
//$msg="";

if(isset($_GET['login'])){
    $myusername = mysqli_real_escape_string($conn,$_GET['username']);
    $mypassword = mysqli_real_escape_string($conn,$_GET['password']); 
    
    $sql = "SELECT username,password FROM admins WHERE username = '$myusername' and  password = '$mypassword'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //$active = $row['active'];
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count == 1) {
    
    echo" <script type='text/javascript'>
  window.location.href = 'http://127.0.0.1:8000/front'
</script>";
$_SESSION['username']=$_GET['username'];
    }else {
       echo "Your Login Name or Password is invalid";
    }
 }
?>



<div class="row" style="margin-left:400px;margin-top:100px;display:block;">
<h2 style="margin-left:100px;color:white;">ADMIN LOGIN</h2>
  <div class="column" style="background-color:white;padding:55px;float:left;">
  <form method="get">
@csrf
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputAddress" style="color:black;">username</label>
    <input type="text" class="form-control" id="username" name="username" style="width:300px;">
  </div>
  </div>
  <div class="form-row" >
  <div class="form-group col-md-4">
    <label for="inputAddress2" style="color:black;"> password</label>
    <input type="password" class="form-control" id="password" name="password" style="width:300px;">
  </div>
</div>
  </div>
  <div class="column" style="background-color:black;width:20%;padding:35px;">
  <input type="submit" class="btn btn-primary" name="login" value="Sign up" style="margin-top:80px;height:50px;">
  </div>
  
</form>
</div>
@endsection