<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Home') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        
    #navbarSupportedContent a{
        color:white;
    }
    #navbarSupportedContent a:hover{
        color:blue;
    }
    body{
        overflow-x:hidden;
        background-color:#add8e6;
    }
    input{
      border:1px solid black;
      border-radius:50px 50px;
      width:300px;
      padding:10px;
      margin-top:20px;
    }
    input[type="submit"]{
      border:1px solid black;
      border-radius:50px 50px;
    }
    h5{
      text-align:center;
      color:red;
      font-size:20px;
    }
    label{
      color:purple;
      font-size:20px;
    }
    </style>
</head>
<body>

    
     
    
    <div id="app">
        <nav class="navbar navbar-expand-md" style="background-color:black;">
            <div class="container">
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    <img src="https://django-library.herokuapp.com/static/img/logo.png" style="widht:50px;height:50px;">
</li>
                    <li class="nav-item">
                    <p style="margin-top:10px;color:white;margin-left:20px;">ONLINE LIBRARY MANAGEMENT SYSTEM</p> 
</li>
                 
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
               
                        <!-- Authentication Links -->
                        <li class="nav-item">
                        <a class="dropdown-item" href="/home">
                                      
                                        {{ __('<--BACK') }}
                                    </a>
          
                                    
                                </li>
                        <li class="nav-item">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('LOGOUT') }}
                                    </a>
          
                                    <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4" style="margin:100px;margin-left:400px;">
        <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box" style="width:150px;" >
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Edit Profile</h5>
          </div>
          <div class="widget-contentS">
            <form class="form-horizontal"  method="post" action="{{route('user.update')}}" name="add_category" id="add_category" novalidate="novalidate">
            {{ csrf_field() }}
            <div class="control-group">
                <label class="control-label">first Name</label>
                <div class="controls">
                
                  <input type="text" value="{{$user->name}}"name="name" id="name" required>
                </div>
                <div class="control-group">
                <label class="control-label">second name</label>
                <div class="controls">
                  <input type="text" value="{{$user->secondname}}" name="secondname"required >
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Email</label>
                <div class="controls">
                  <input type="email"  value="{{$user->email}}"name="email" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">contact</label>
                <div class="controls">
                  <input type="text"  value="{{$user->contact}}"name="contact" required>
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="update" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  
        </main>
        
</body>
</html>
