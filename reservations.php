<?php
session_start();
$host="localhost";
$dbusername="root";
$dbpassword="";
$db="random1";
$cn=mysqli_connect($host, $dbusername, $dbpassword, $db);
$e=$_SESSION['username'];
?>

<html>
<head>
	<title>reservations</title>
	<h1><strong>YOUR RESERVATIONS</strong></h1>
	<hr>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="restaurants.css">
</head>
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
<div class="container">
	<?php
    $msg=' ';
	$result=mysqli_query($cn,"select r.restname,t.rdate,t.rtime,t.tables from table1 t,restaurant r where r.restid=t.restid and t.userid='$e'");
	if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$restname=$row['restname'];
		$rdate=$row['rdate'];
		$rtime=$row['rtime'];
		$no_of_tables=$row['tables'];
		?>
<div class="tbox">
	<img class="pic" src="images/rrest.png">
	<div class="nameplate">
		<span> RESTAURANT NAME &nbsp;: &nbsp;<?php echo $restname; ?> </span> <br><br>
		<span> DATE  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;: &nbsp;<?php echo $rdate; ?> </span> <br><br>
		<span> TIME  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<?php echo $rtime; ?> </span> <br><br>
		<span> TABLES  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; : &nbsp;<?php echo $no_of_tables; ?> </span><br><br>
	</div>
</div>
<br><br><br>

<?php } }
else
{
	$msg = "<div class='msg1'><h3 style='color:red;'>No Reservations Yet!!</h3></div>";
}

?>
<?php echo $msg; ?>


</div>

</body>
</html>