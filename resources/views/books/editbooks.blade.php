@extends('layouts.adminlayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">categories</a> <a href="#" class="current">Edit category</a> </div>
    <h1>Books</h1>

  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Edit BookDetails</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{url('/books/edit/'.$books->bid)}}" name="add_category" id="add_category" novalidate="novalidate">
            @csrf  
            <div class="control-group">
                <label class="control-label">Book Name</label>
                <div class="controls">
                  <input type="text" name="name" id="name" value="{{$books->name}}">
                </div>
                <div class="control-group">
                <label class="control-label">Authors</label>
                <div class="controls">                
                  <input type="text" name="authors" id="authors" value="{{$books->authors}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Edition</label>
                <div class="controls">
                  <input type="text" name="edition" id="edition" value="{{$books->edition}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Status</label>
                <div class="controls">
                  <input type="text" name="status" id="status" value="{{$books->status}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Quantity</label>
                <div class="controls">
                  <input type="text" name="quantity" id="quantity" value="{{$books->quantity}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Department</label>
                <div class="controls">
                  <input type="text" name="department" id="department" value="{{$books->department}}">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="EditDetails" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  
             
@endsection