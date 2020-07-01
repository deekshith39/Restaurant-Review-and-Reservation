<!DOCTYPE html>


<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
$e=$_SESSION['username'];
$msg='';
$msg1='';
$msg2 ='';
$msg3='';
$msg4='';
$msg6='';
$host="localhost";
$tablesleft =10;

$dbusername="root";
$dbpassword="";
$db="random1";
$cn = mysqli_connect($host, $dbusername, $dbpassword, $db);

if(isset($_POST['submit'])){

    $Restaurantid=6;
    $userId= $e;
    $Date=$_POST['Date'];
    $Time=$_POST['Time'];
    $tables = $_POST['tables'];

$startTime ="09:00";
$endTime ="20:00";
$now  =  Date("Y-m-d");

if ($Date < $now)
{
     $msg2 ="<div class='msg2'><h3 style='color:red;'>Invalid Date try another!</h3></div>";  
}
else{
      if (strtotime($Time) >= strtotime($startTime) && strtotime($Time) <= strtotime($endTime)) {

      if($tables>10 || $tables<0){
    // Check once again
        $msg3="<div class='msg'><h3 style='color:red;'>You can book upto 10 tables only</h3></div>";
  }
  else{
    $sql2 = "select sum(t.tables) as tab from table1 t 
where t.userid= '$e'
and t.restid =6 and t.rdate='$Date';";
$result4=mysqli_query($cn,$sql2);
if(mysqli_num_rows($result4)==1){
$retrive9 = mysqli_fetch_array($result4);
$tablesleft = 10-$retrive9['tab'];

}


if($tablesleft <$tables){
$msg6="<div class='msg'><h3 style='color:red;'>You can book upto 10 tables only
</h3></div>" ;
}
  
  else{
  $sql="insert into table1(rdate,rtime,restid,userid,tables) values ('$Date','$Time',$Restaurantid,'$userId',$tables);";
  mysqli_query($cn,$sql);
   $msg1="<div class='msg'><h3 style='color:green';>You have reserved successfully!</h3></div>";
}
  




}
}
else{
    $msg = "<div class='msg1'><h3 style='color:red;'>We are not open yet!</h3></div>";
  }
}
}

  ?>
<html>
<head>
  <link rel="stylesheet" type="text/css" 
  href="r1.css">
  <title>reserve</title>
  <h1>TABLE RESERVATION</h1>
  <hr>
</head>
<style type="text/css">
  .msg
  {
    padding-left: 27%;
  }
  .msg1
  {
    padding-left: 33%;
  }
  .msg2
  {
    padding-left:40%;
  }
</style>
<body>
  
 <div class="sidenav">
  <br>
        <a href="profile.php">Profile</a><br>
      <a href="home.html">Home</a><br>
      <a href="reviews.html">Review</a><br>
      <a href="restaurant.html">Reserve</a><br>
      <a href="logout.php">Logout</a><br>

      </div>

<br>
<br>

<div class="box">
  <img src="images/rest.png" class="rest">
<form  method="POST">
  <br>
  <div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label style="color:white;font-size: 30px;">Roots</label>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
    
      
    </div>

  <div>
    <br>
    <br>
    

    <label>No. of Tables</label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
    <input type="text" name="tables" required >
  </div>
  <br>
  <br>

    
    <br>
    <div>
      <label>Date  </label>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <input type="Date" name="Date"  class="b2" 
      required>
      
    </div>
    <br>
    <br>
    <br>
    <div>
      <label>Time </label>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="time" size="12" 
       name="Time" class="b2" placeholder="h:mm am||pm"
      required>
   
      
      <br>
      <br>
      <small ><small style="text-align: right;">Timings : 9am to 8 pm</small> </small>
    </div>
    <br>
    
    <input type="submit" name="submit" value="Submit" class="b3" >
<br>
<br>
</form>
 
<?php echo $msg; ?>
<?php echo $msg1; ?>
<?php echo $msg3; ?>
<?php echo $msg4;?>
<?php echo $msg6;?>
<?php echo $msg2; ?>

</div>


</body>
</html>