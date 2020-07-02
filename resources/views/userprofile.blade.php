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
        <main class="py-4">
        <a href="/edit/user/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" style="margin-left:1200px;">Edit</a>
        <div class="show">
        <p style="margin-left:550px;font-size:20px;">MY PROFILE</P>
        <img src="https://www.jumpstarttech.com/files/2018/08/Network-Profile.png" style="width:150px;margin-left:550px;">
        <table class="table table-striped" style="width:500px;margin-left:400px;">
 
    <tr>
      <th scope="row">FIRST NAME</th>
      <td>  {{$user->name}}</td>
    </tr>
    <tr>
      <th scope="row">LAST NAME</th>
      <td>{{$user->secondname}}</td>
    </tr>
    <tr>
      <th scope="row">EMAIL</th>
      <td>{{$user->email}}</td>
    </tr>
    <tr>
      <th scope="row">CONTACT</th>
      <td>{{$user->contact}}</td>
    </tr>
    <tr>
      <th scope="row">DEPARTMENT</th>
      <td>{{$user->department}}</td>
    </tr>
  
</table>
    </div>
           </div> 
        </main>
        
</body>
</html>
