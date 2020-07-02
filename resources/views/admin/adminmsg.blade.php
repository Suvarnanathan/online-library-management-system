<!DOCTYPE html>
<head>
<style>
.left{
  height:600px;
  width:500px;
  float:left;
  background-color:#8ecdd2;
  margin-top:2px;
}
.left2{
  height:600px;
  width:250px;
  float:right;
  background-color:#537890;
  border-radius:20px;
  margin-right:60px;
}
.list{
  height:500px;
  width:250px;
  background-color:#537890;
  float:right;
  color:white;
  border-radius:20px;
  overflow-y:scroll;
  overflow-x:hidden;
}
.right{
  height:600px;
  width:1000px;
  margin-left:500px;
  background-color:#8ecdd2;
  margin-top:2px;
  margin-right:100px;
}
.right2{
  height:600px;
  width:500px;
  background-color:#537890;
  margin-top:2px;
  border-radius:20px;
  float:left;
  color:white;
  padding:20px;
  
}

tr:hover{
  background-color:#537890;
  cursor:pointer;
}
.left2 input[type='text']{
  height:30px;
  width:120px;
  background-color:#537890;
  margin:10px;
  padding:10px;
  border-radius:10px;
  float:left;

}
.left2 input[type='submit']{
  height:50px;
  width:60px;
  margin:10px;
  padding:10px;
  border-radius:10px;
}
.formcontrol{
  width:100%;
  float:left;
}
.msg{
    height:450px;
    overflow-y:scroll;
}
.chat{
    display:flex;
    flex-flow:row wrap;

}

</style>
</head>
</html>
@extends('layouts.adminlayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="/admin/students" class="current">studentdetails</a> </div>
    <h1>STUDENT DETAILS</h1>
  </div>
  <?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = 'librarysis';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

if(! $conn ) {
   die('Could not connect: ' . mysqli_error());
}
$sql1=mysqli_query($conn,"SELECT username FROM messages group by username order by status;");

  ?>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="left">
        <div class="left2">
          <div>
            <form method="get" enctype="mutlipart/form-data" >
              <input type="text" name="username" id="uname">
              <input type="submit" name="show" value="show" clss="btn btn-default">
            
            </form>
          </div>
        <div class="list">
          <?php
            echo "<table id='table' class='table'>";
            while($res1=mysqli_fetch_assoc($sql1)){
              echo "<tr>";
            echo "<td style='width:60px;'>";
            echo "<img src='https://static.thenounproject.com/png/363633-200.png'>";
            echo "</td>";
            echo "<td style='padding-top:30px;'>";
            echo $res1['username'];
            echo "</td>";
            echo "</tr>";
}
            echo "</table>";
          ?>
        </div>
        </div>
        </div>
        <div class="right">
        <div class="right2">
          <?php
            if(isset($_GET['show'])){
              $dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = 'librarysis';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
$sql=mysqli_query($conn,"SELECT * FROM messages where username='$_GET[username]';");

if(!empty($_GET['username'])){
  $_SESSION['username']=$_GET['username'];
}

//$_SESSION['username']=$_GET['username'];
//echo $_SESSION['username'];
           

              ?>
      
             
             
             <div style="height:70px;width:100%;text-align:center;color:white;">
            <h3> <?php echo $_SESSION['username']?></h3>
             </div>
             <div class="msg">
                <?php
                  while($row=mysqli_fetch_assoc($sql))
                  {
                      if($row['sender']=='student')
                      {
                        ?>
                        <div class="chat user">
     <div style="float:left;padding-top:5px;">
                    &nbsp;
                    <?php echo $_SESSION['username']?>
                    &nbsp;
                    </div>
               
                          <div style="height:20px;
    width:300px;
    padding:13px 10px;
    background-color:#821b69;
    border-radius:10px;
    order:-1;
    color:white;
    float:left;" class="chatbox">
                          &nbsp;
                          <?php
                             echo $row['message'];
                          ?>
                          </div>
                          <?php
                      }
                      else

                  {
                ?>
                <div class="chat admin">
                    <div style="float:left;padding-top:5px;">
                    &nbsp;
                    <p>admin</p>
                    &nbsp;
                    </div>
                    <div style="height:20px;
    width:300px;
    padding:13px 10px;
    background-color:#423471;
    border-radius:10px;
    color:white;">
                    <?php
                      echo $row['message'];
                    ?>
                    </div>
                    </div>
                    <?php
                  }
                }
                    ?>
             </div>
             </div>
           
             <div>
             <form action="/admininbox" method="get" enctype="multipart/form-data">
@csrf
<input type="text"  style="width:400px;margin-top:150px;"name="msg" placeholder="write message here....."class="formcontrol" required>
<input style="margin-left:10px;margin-top:150px;" type="submit" value="send" name="submit" class="btn btn-info btn-lg">
</form>
             </div>
             
            <?php
            }
          
            else{
              
                echo "<img src='https://media0.giphy.com/media/l2JhGNT4oLwPNNokw/giphy.gif' style='border-radius:50px;width:300px;height:300px;margin:120px;'>";
              }
            
            
                if(isset($_GET['submit']))
                {
                $dbhost = 'localhost:3306';
                $dbuser = 'root';
                $dbpass = '';
                $dbname = 'librarysis';
                $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

                mysqli_query($conn,"INSERT INTO messages values('','$_GET[username]','$_GET[msg]','no','admin');");
            
                $sql=mysqli_query($conn,"SELECT * FROM messages where username='$_GET[username]';");
              }
              else{
                  
                    $dbhost = 'localhost:3306';
                    $dbuser = 'root';
                    $dbpass = '';
                    $dbname = 'librarysis';
                    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
                    
                   
                            $res=mysqli_query($conn,"SELECT * FROM messages where username='$_[username]';");
                  }
                
                  ?>
                
       
        </div>
        </div>
      </div>
      </div>
      </div>
      <script>
      var table=document.getElementById('table'),eIndex;
      for(var i=0; i<table.rows.length;i++)
      {
        table.rows[i].onclick=function(){
          rIndex=this.rowIndex;
          document.getElementById('uname').value=this.cells[1].innerHTML;
        }
      }
      </script>
      @endsection