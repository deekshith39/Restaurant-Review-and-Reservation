<?php
session_start();
$host="localhost";
$dbusername="root";
$dbpassword="";
$db="random1";
$cn=mysqli_connect($host, $dbusername, $dbpassword, $db);
$e=$_SESSION['username'];
$msg='';
$retrieve1='';
$result=mysqli_query($cn,"select email,name,phoneno,images from customer where username='$e'");
$retrieve=mysqli_fetch_array($result);
$result1=mysqli_query($cn,"select restname from restaurant where restid in (select restid from table1 where userid='$e')");
$retrieve1=mysqli_fetch_array($result1);
//print_r($retrieve);
$name=$retrieve['name'];
$email=$retrieve['email'];
$phoneno=$retrieve['phoneno'];
$image=$retrieve['images'];
if(empty($retrieve1))
{
  $msg="no reservations yet!";
}
else
{
  $restname=$retrieve1['restname'];
    $msg="$restname";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<link rel="stylesheet" type="text/css" href="profile.css">


</head>
<style type="text/css">
  body
  {
    background-color: #DDDDDD;
  }
	img
	{   width: 300px;
		padding-left: 45%;
		height: 200px;
    position: absolute;
    
	}
    h2
    {
    	padding-left: 130px;
    	font-family: sans-serif;
    }
    p
    { 
    	font-size: 25px;
      font-family: arial;
    }
    .box
{ width:500px;
  height: 350px;
  background: #000;
  color:#fff;
  position: absolute;
  top:50%;
  left: 40%;
  border-radius: 15px;
}

.res
{
  padding-left: 75px;
}
.res a
{
  text-decoration: none;
  color: white;
}
.res a:hover
{
  color: red;
}
.a
{
  font-family: sans-serif;
}
input{
  background: transparent;
  border: none;
  border-bottom: 1px solid #fff;
  color: #fff;
  height: 30px;
  font-size:75%;
}

form
{
  padding-left: 15%;
  padding-top: 3%;
  font-family: arial;
  font-size: 125%;
  color: white;
  border:25px;
}
label
{
  font-size: 80%;
}
</style>
<body>	<div class="sidenav"><br>
  <a href="profile.php">Profile</a><br>
  <a href="home.html">Home</a><br>
  <a href="reviews.html">Review</a><br>
  <a href="restaurant.html">Reserve</a><br>
  <a href="logout.php">Logout</a><br>
</div>
<h2 align="center">Welcome <?php echo ucfirst($name) ?></h2>
<a href="logout.php"><button style='float: right;margin-top: 10px;background-color: white;padding: 14px 33px 13px 37px;margin-right: 20px; color: #818181;border-radius: 10px;font-size: 18px;  text-align: center;border-color: black;'>Logout</button></a><br>
<p class="para">
<img src='images/<?php echo $image ?>' class='rest'>

<div class="box">
<form method="POST">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div>
<label>USERNAME </label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" value="<?php echo $e; ?>"> 
</div>
<br>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div>
<label>MOBILE NO  </label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 <input type="text" value="<?php echo $phoneno; ?>"> 
</div>
<br>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div>
<label>E-MAIL  </label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="text" value="<?php echo $email; ?>">  
</div>
<br>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="res">
  <a href="reservations.php">
View my reservations 
</a>
</div>
</form>
</div>
</p>


</body>
</html>