<?php
session_start();
?>
7<html>
    <body background="https://image.shutterstock.com/image-photo/membership-concept-template-registration-register-260nw-1122441203.jpg" style="background-repeat:no-repeat;background-size:cover;">
</body>
    </html>
@extends('layouts.admin_app')
@section('content')

<form method="post" action="/admin/store" style="margin-left:550px;">
@csrf
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4" style="color:black;">FirstName</label>
      <input type="text" class="form-control" id="firstname" name="firstname"required>
    </div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputPassword4" style="color:black;">LastName</label>
      <input type="text" class="form-control" id="lastname" name="lastname" required>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputAddress" style="color:black;">username</label>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputAddress2" style="color:black;"> password</label>
    <input type="password" class="form-control" id="password" name="password" required min="8" max="12">
  </div>
</div>

  <div class="form-row">
 
    <div class="form-group col-md-4">
      <label for="inputCity" style="color:black;">email</label>
      <input type="email" class="form-control" id="email" name="email"required>
</div>
</div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputZip" style="color:black;">Contact</label>
      <input type="text" class="form-control" id="con" name="con">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign up</button>
</form>
@endsection