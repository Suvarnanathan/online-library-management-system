@extends('layouts.adminlayout.admin_design')
@section('content')
       <div id="content">
  <div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">books</a> <a href="/view_product" class="current">viewbooks</a> </div>
    <h1>BOOK DETAILS</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
      <form class="form-inline" action="/search" method="get" style="margin-left:750px;">
    @csrf
    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>

  
        <div class="widget-box">
      
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>VIEW BOOKS</h5>
   
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Book Name</th>
                  <th>Authors</th>
                  <th>Edition</th>
                  <th>Status</th>
                  <th>Quantity</th>
                  <th>Department</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($books as $books )
                <tr class="gradeX">
               
                  <td scope="row">{{$books ->name}}</td>
                  <td scope="row">{{$books ->authors}}</td>
                  <td scope="row">{{$books ->edition}}</td>
                  <td scope="row">{{$books ->status}}</td>
                  <td scope="row">{{$books ->quantity}}</td>
                  <td scope="row">{{$books ->department}}</td>
                  <td class="center"><a href="/books/edit/{{$books->bid}}" class="btn btn-primary btn-mini">Edit</a> 
                   <a id="del"href="/books/{{$books->bid}}" class="btn btn-danger btn-mini">Delete</a></td>
                  </tr>

                @endforeach
              </tbody>
            </table>
         
          </div>
        </div>
@endsection