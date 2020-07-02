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
      <form class="form-inline" action="/admin/search" method="get" style="margin-left:750px;">
    @csrf
    <input class="form-control mr-sm-2" type="search" name="search" placeholder="enter student name" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
        <div class="widget-box">
      
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>STUDENT INFORMATION</h5>
   
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                <th>ID</th>
                  <th>FIRST NAME</th>
                  <th>LAST NAME</th>
                  <th>EMAIL</th>
                  <th>CONTACT</th>
                  <th>DEPT</th>
                 
                </tr>
              </thead>
              <tbody>
              @foreach($user as $user )
                <tr class="gradeX">
               
                  <td scope="row">{{$user ->id}}</td>
                  <td scope="row">{{$user ->name}}</td>
                  <td scope="row">{{$user ->secondname}}</td>
                  <td scope="row">{{$user ->email}}</td>
                  <td scope="row">{{$user ->contact}}</td>
                  <td scope="row">{{$user->department}}</td>
                  
                  <!--th scope="row" ><a href="" class="btn btn-primary btn-mini">Edit</a> 
                   <a id="del"href="" class="btn btn-danger btn-mini">Delete</a></th-->
                 
                </tr>

                @endforeach
              </tbody>
            </table>
         
          </div>
        </div>
@endsection