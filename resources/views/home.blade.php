 
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                overflow-x:hidden;
              
            }

            .full-height {
                height:10%;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            .top-left {
                position: absolute;
                left: 10px;
                top: 8px;
            }
            img{
                width:20%;
                height:20%;
            }
            .rowmenu h1{
            margin:20px;
            text-align:center;
            }
            .bottom{
                height:420px;
                background-color:#1d252d;
                color:white;
                font-size:20px;
            }
            .b1{
                height:100px;
            }
            .b2{
                height:100px;
            }
            a{
                color:white;
            }
            a:hover{
                color:red;
            }
 
            .notification {
    color: white;
  text-decoration: none;
  padding: 10px 15px;
  position: relative;
  display: inline-block;
  
}
.notification:hover {
    
  text-decoration: none;
  
  
}



.notification .badge {
  position: absolute;
  top: -10px;
  right: -2px;
  padding: 5px 10px;
  border-radius: 50%;
  background: red;
  color: white;
  
}
      </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height" style="background-color:black;">
        <div class="col-2">
                <img src="https://upload.wikimedia.org/wikipedia/en/e/e0/Kelaniya.png" style="float:left;">
                <p style="color:white;margin-top:10px;margin-left:10px;">University Of Kelaniya</p>
            </div>
            <div class="col-6">
            
        </div>
        <div class="col-3">
           
               
   
            
<nav class="navbar navbar-expand-lg">
  <div class="collapse navbar-collapse" id="navbarNav">
  @if (Route::has('login'))
    <ul class="navbar-nav">
    @auth
      <li class="nav-item" >
        <a class="nav-link" href="/wel" style="margin-left:-600px;margin-top:10px;">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/viewbooks" style="margin-left:-500px;margin-top:10px;">BOOKS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/stufeedback" style="margin-left:-400px;margin-top:10px;">FEEDBACK</a>
        
        
      </li>
      <li class="nav-item">
        <a class="notification" href="/inbox" style="margin-top:10px;margint-left:200px;" >INBOX
        <span class="badge">
  @foreach($users as $users)
{{$users->count}}
@endforeach
</span>
</a>
        

    
                        <li class="nav-item" >
                      <li class="nav-item dropdown" style="display:block;margin-top:10px;">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
          
                                    <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                        @csrf
                                    </form>
                               
        
                     
                                    <a class="dropdown-item" href="/profile">
                                        MyProfile
                                    </a>

                                    <form id="logout-form" action="/profile" method="post" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                            </li>

                                </li>
                             
      @else
      <li class="nav-item active">
        <a class="nav-link"  href="{{ url('/home') }}">HOME</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link"  href="{{ url('/admin') }}">BACK TO ADMIN</a>
      </li>
                    @endauth

      
    </ul>
   
    @endif
  </div>
  
 
</nav>       
</div>
        </div>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="https://menafn.com/updates/pr/2020-02/28/CG_32f5f797-7image_story.jpg" class="d-block w-100" style="height:450px;">
    </div>
    <div class="carousel-item">
      <img src="https://www.srilankacourse.com/wp-content/uploads/2016/10/library-courses-in-sri-lanka.jpg" class="d-block w-100" style="height:450px;" >
    </div>
    <div class="carousel-item">
      <img src="https://menafn.com/updates/pr/2020-02/28/CG_32f5f797-7image_story.jpg" class="d-block w-100" style="height:450px;" >
   
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
<div class="rowmenu" >
<div class="col-3" style="float:left;" >
<h1>HISTORY</h1>


            <p style="text-align:justify;">The University of Kelaniya Library was Crystallized around the Vidyalankara Pirivena Collection with the elevation of the Pirivena to a fully pledged University status in 1959. Throughout its existence, the library was located in several places and finally moved to its present building in 1977.
The present library collection encompasses over 248,078 printed books and nearly 100,000 ebooks pertaining to various academic disciplines ranging from Archaeology to Zoology and subscriptions to about 22,313 academic journals</p>
            </div>
            <div class="col-1" style="float:left;">&nbsp;</div>
            <div class="col-3" style="float:left;">
            <h1>VISION</h1>
            <p>To be am outstanding academic library which is capable of delivering a state-of-the-art, user-focused information service and facilities in realizing of the university vision and mission. </p>
            </div>
            <div class="col-1" style="float:left;">&nbsp;</div>
            <div class="col-3" style="float:left;">
            <h1>MISSION</h1>
            <p>To maintain, develop and provide the collections, services and physical environment that best support the educational, research and diverse information needs of the university community.
<br>To develop students' core academic skills for independent and lifelong learning through a coordinated range of high quality, timely responsive and cost effective learning support services.</p>
          
           
            </div>
            <div class="col-1">&nbsp;</div>

<div class="bottom">
<div class="b1">
<div class="col-2" style="float:left">&nbsp;
            </div>
            <div class="col-4"style="float:left">
            <p style="font-size:30px;margin:20px;margin-top:100px;">Let's Get Social</p>
            </div>
            <div class="col-6">&nbsp;</div>
        </div>
      
        <div class="b2">
        
        <div class="col-6" style="float:left">&nbsp;</div>
            <div class="col-4"style="float:left;margin-top:55px;">
            <a href=""><i class="fa fa-facebook" style="font-size:20px;color:white;background-color:blue; border:1px solid blue;border-radius:100px;padding:5px;"></i></a>
            <a href=""><i class="fa fa-twitter" style="font-size:20px;color:white;background-color:lightblue; border:1px solid blue;border-radius:100px;padding:5px;"></i></a>
            <a href=""><i class="fa fa-instagram" style="font-size:20px;color:white;background-color:blue; border:1px solid blue;border-radius:100px;padding:5px;"></i></a>
            
            <a href=""><i class="fa fa-yahoo" style="font-size:20px;color:white;background-color:purple; border:1px solid purple;border-radius:100px;padding:5px;""></i></a>

            </div>
            <div class="col-2">
            </div>
           
</div>
<br>
<hr style="background-color:black;">
            
         <div class="b3">   
            <div class="col-2" style="float:left;">
           &nbsp;
            </div>
            <div class="col-4" style="float:left;">
            <img src="https://library.kln.ac.lk/images/2020/02/25/logo-2-new-small.png" style="width:50%;margin-top:20px;">
            </div>
            <div class="col-2" style="float:left;">
            &nbsp;
            </div>
            <div class="col-4" style="float:left;">
            <p style="font-size:14px;text-align:right;margin-top:10px;">&copyCopyright 2020 Reserved by The Library UOK |<br>
           Design by Ven. Deiyandara Pannananda | Interactive Media Librarian<br>
            Interactive Media Unit - The Library - University of Kelaniya</p>
            </div>
</div>   
</div>   
    </body>
</html>
            