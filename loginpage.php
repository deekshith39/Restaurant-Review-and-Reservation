<html>
<?php session_start();

?>
<head>
<meta charset="utf-8">
<title>login Page</title>
<link href="login.css" rel="stylesheet" 
type="text/css" media="all" />

</head>
<style type="text/css">
	body
	{
		background: url('images/bestbg.jpg');
		height:100%;

  background-size: cover;
	}
html{ 
  background: url('images/bestbg.jpg') ; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height:100%;
}
h1{
	color: white;
}

</style>
<body id="bodybg">
	
  

	<h1 class="topic">Restaurant Review and Reserve</h1>
	
  <div class="wthree-form">
		
		  <h2>LOGIN</h2>
    
		<div class="w3l-login form">
			<form method="POST">
				<div class="form-sub-w3">
					<input type="text" id="username" name="username" placeholder="User Id" required=""/>
				</div>
			    <div class="form-sub-w3">
					<input type="password" id="password" name="password" placeholder="Password" required=""/>
				</div>
				<label class="anim">
					<input type="checkbox" class="checkbox">
					<span>Remember Me</span> 
				</label>
				<div class="submit-agileits">
					<input type="submit" name="submit" value="Login">
				</div>
				<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$db="random1";
$cn=mysqli_connect($host, $dbusername, $dbpassword, $db);


    if(isset($_POST['submit'])){

    	$username=$_POST['username'];
    	$password=$_POST['password'];
    	$_SESSION['username'] = $_POST['username'];

    	$sql="select * from customer where username='".$username."' AND
    	   password='".$password."'";

    	$res=mysqli_query($cn,$sql);

    	if(mysqli_num_rows($res)==1){
    		echo "You have successfully logged in";
    		header("location: home.html");
    		die();

    	}

    	else{
    		echo "<font color='red'>Incorrect USESRNAME or
    		 PASSWORD</font>";
    		 die();
    	}


    }
?>
				<a href="signup.php">Dont have account 😯 press here</a>
			</form>
		</div>
	</div>
</body>

</html>
