<?php
session_start();

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = 'librarysis';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

if(! $conn ) {
   die('Could not connect: ' . mysqli_error());
}
?>
<!--Header-part-->
<div id="header">
  <h1><a href="/front">matrix</a></h1>
</div>
<!--close-Header-part--> 
<?php

$r=mysqli_query($conn,"SELECT COUNT(status) as total FROM messages where status='no' and sender='student';" );
$c=mysqli_fetch_assoc($r);

?>

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome  <?php echo $_SESSION['username']?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="/"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> 
     <span class="label label-important"><?php echo $c['total']?></span>
     <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="/admininbox"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
   
                  
            
                    <li class="nav-item">
        <a class="nav-link" href="/">HOME</a>
      </li>
    

  </ul>
</div>

