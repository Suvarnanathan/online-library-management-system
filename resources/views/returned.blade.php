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
<h2>Date of Returned   Lists</h2>
</div>
<div class="container-fluid">
    <hr>

  </div>
<table class="table table-bordered table-striped">
          
          <thead>
            <tr>
            <th>USERNAME</th>
              <th>USER ID</th>
              <th>BOOK ID</th>
              <th>BOOK NAME</th>
              <th>AUTHORS</th>
              <th>EDITION</th>
              <th>APPROVE</th>
              <th>ISSUE DATE</th>
              <th>RETURN DATE</th>
              
            </tr>
          </thead>
          <tbody>
          @foreach($book as $books)
         
              
            <td scope="row">{{$books  ->username}}</td>
            <td scope="row">{{$books ->id}}</td>
            <td scope="row">{{$books  ->bid}}</td>
            <td scope="row">{{$books ->name}}</td>
            <td scope="row">{{$books  ->authors}}</td>
            <td scope="row">{{$books  ->edition}}</td>
            <td scope="row" ><p style="background-color:green;color:yellow;text-align:center;">{{$books  ->approve}}</p></td>
            <td scope="row">{{$books  ->issue}}</td>
            <td scope="row">{{$books  ->returns}}</td>
           
             
            </tr>
       
         
            @endforeach
          
      
      
          </tbody>
   
         
        </table>
    
     
       
        
    
         
         

    </div>  
@endsection
