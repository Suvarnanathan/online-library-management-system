<html>
    <head>
        <style>
            .login{
                margin-left:-12%;
                width:170%;
                display:block;
                background-color:green;
               
  
            }
            .login:hover{
                background-color:grey;
            }
            </style>
    </head>
</html>
@extends('layouts.app')

@section('content')

    <div class="row topbar">
   <div class="col-1">
</div>

      <div class="col-5" >
      <img src="https://pizzahousenl.ca/wp-content/uploads/2016/03/logo_trans.png" style="height:100%;width:100%;">
        </div>
        <div class="col-5">
            
                <div style="margin-top:300px;text-align:center;font-size:20px;">
                {{ __('LOGIN') }}
             
</div>
        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        

                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="EMAIL" style="float:left;width:50%">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="PASSWORD" style="width:50%;">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                   
                                 
                       
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="margin-left:5px;">

                                    <label class="form-check-label" for="remember" style="margin-left:20px;">
                                        {{ __('Remember Me') }}
                                

<div class="col-8">
</div>
<div class="col-12"   >
                       
                                <button type="submit" class="login">
                                    {{ __('Login') }}
                                </button>
</div>
<div class="col-4">
</div>
<div class="col-8" style="margin-left:150px;">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                              
</div>
                    </form>
        </div>
        <div class="col-1">
</div>
@endsection
