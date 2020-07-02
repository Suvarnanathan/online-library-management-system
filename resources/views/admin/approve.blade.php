@extends('layouts.adminlayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="/admin/students" class="current">studentdetails</a> </div>
    <h1>STUDENT DETAILS</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
<form method="post" action="/approve/edit">
  @csrf
  <input type="text" name="uname" placeholder="username" ><br>
  <input type="text" name="bid" placeholder="BID" ><br>
  <input type="text" name="approve" placeholder="yes or no"><br>
  <input type="text" name="issue" placeholder="issue data yyyy-mm-dd"><br>
  <input type="text" name="returns" placeholder="return date yyyy-mm-dd"><br>
  <input type="submit" value="update"name="submit"><br>
  </form>
@endsection