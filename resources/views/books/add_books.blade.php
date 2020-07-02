@extends('layouts.adminlayout.admin_design')
@section('content')
  <div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">books</a> <a href="/books" class="current">addbooks</a> </div>
  <h1>ADD BOOKS</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>BOOKS</h5>
        </div>
        <div class="widget-content nopadding">
          <form  method="get" action="/books/store"class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Book Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Book Name" name="name"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Authors</label>
              <div class="controls">
                <textarea class="span11" name="authors"></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Edition :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Edition" name="edition"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Status" name="status"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Quantity :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Quantity" name="quantity"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Department:</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Department" name="department"/>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
            
@endsection