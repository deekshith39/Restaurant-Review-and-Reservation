<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<head>
        <style>
   	body
	{
		background: url('images/read-review.jpeg');
		height:100%;

  background-size: cover;
	}
html{ 
  background: url('images/read-review.jpeg') ; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: 90%;
  height:100%;
}


       
        form
        {
              padding-left: 18%;
  padding-top: 7%;
  font-family: arial,georgia;
  font-size: 100%;
  color: black;
  border:25px;
}  
        h1{
            padding-left: : 13%;
            margin: 0px;
                font-size: 35px;
                font-display: center;
                font-family: arial,georgia;
        }
        h3{
            color: black;
			font-family: Arial, Helvetica, sans-serif;
			padding-top: none;
			margin:0px;
      padding-right: 5%;
        }
        hr
        {
            display: block;
    unicode-bidi: isolate;
    margin-block-start: 0.5em;
    margin-block-end: 0.5em;
    margin-inline-start: auto;
    margin-inline-end: auto;
    overflow: hidden;
    border-style: inset;
    border-width: 1px;
}
input{
  background: transparent;
  border: none;
  border-bottom: 1px solid #fff;
  color: white;
  height: 40px;
  font-size: 66%;
}

.box
{ width:430px;
  height: 150px;
  background: #000;
  color:#fff;
  position: absolute;
  top:25%;
  left: 43%;
}

.box input[type="submit"]
{
  border: none;
  outline: none;
  height: 40px;
  width: 100px;
  background: #fb2525;
  color: #fff
  font-size:30px;

}
.b
{
  padding-left: 15%;
}
.name
{
  padding-left: 3%;
  font-size: 20px;
}
.box input[type="submit"]:hover
{
  cursor: pointer;
  background: #ffc107;
  color:#000;
}

.record
{
color:white;
  padding-left:18%;
/*  background-color:rgba(1,1,1, 1);
   left: 57%;*/

}
h2
{
  padding-left: 52%;
  font-family: Arial;
}
.b3
{
  margin-left: 18%;
  height: 35%;
  width:20%;

}
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: black;
  overflow-x: hidden;
  padding-top: 20px;
  font-family: serif;
}

.sidenav a {
  padding: 20px 16px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color:red;
}

.h4
{
  padding-left: 10%; 
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 35px;}
  .sidenav a {font-size: 18px;}
}

h1
{
  text-align: center;
  padding-left: 13%;
  font-family:arial, Georgia;
}

img
{
  float: left;
  padding-left: 15%;
}

a
{
  font-family: Arial;
  font-size: 120%;
  text-decoration: none;
}

p
{
  font-size: 125%;
  color: grey;

}
.tabl{
	color:white;
  padding-left:0%;
  padding-right:7%;
  
}
table{
  max-width: 500px;
  max-height: 500px;  
padding-right: 5%;
  border-collapse :collapse;
}
th, td{
	text-align: left;
	padding:10px;
  
 
}
tr:nt-chiid(even){
	background-color:#f2f2f2;
}
th{
	background-color:#008000;
  border :1px;
	color:white;
  text-align: center;
}
label
{
  color: white;
  padding-right: 10px;
}
.t
{

  padding-top: 27%;
  padding-left: 30%;
 
}
.box2{

  font-size: large;
  line-height: 2em;
  padding-left: 0%;
  padding-right:7%;
  padding-top: 2%;
  word-spacing: 1em;

}
.hero-text2{
  position: fixed;
  text-align: 50px;
  position: absolute;
  top: 3%;
  left: 57%;
  right:50%;
  background-color: rgb(0,0,0);
  background-color: rgba(0.8,0.8,0, 0.8);
  font-weight: bold;
  transform: translate(-50%, -10%);
  color: white;

 /* border: 2px solid #f1f1f1; */
  width: 30%;
  
  padding: 10px;
  text-align: center;
}
.hero{

color:white;
	position: fixed;
  text-align: 50px;
  position: absolute;
  top: 170%;
  left: 50%;
  right:65%;
  background-color: rgb(0,0,0);
  background-color: rgba(1,1,1, 1);
  font-weight: bold;
  transform: translate(-50%, -10%);
  color: white;

  
  width: 80%;
  padding: 10px;
  text-align: center;
}
}
        </style>        
</head>
    <body> 
      <div class="hero-text2"><div class="box2"><h1>READ REVIEWS</h1></div></div>
    
       
       
        <div class="sidenav"><br>
            <a href="profile.php">Profile</a><br>
            <a href="home.html">Home</a><br>
            <a href="reviews.html">Review</a><br>
            <a href="restaurant.html">Reserve</a><br>
            <a href="logout.php">Logout</a><br>
          </div>
          <div class="box">
        <form action=""  method="POST">
                <div>
               <div class="name"> 
                <label for="rest">Name:</label>
                 
                    <select id="rest" name="rest">
  <option value="Grasshopper">Grasshopper</option>
  <option value="Empire Restaurant">Empire Restaurant</option>
  <option value="Stories">Stories</option>
  <option value="House of Commons">House of Commons</option>
  <option value="The Permit Room">The Permit Room</option>
  <option value="Roots">Roots</option>
  <option value="The Barbecue Kingdom">The Barbecue Kingdom</option>
  <option value="Rolls & Bowls">Rolls & Bowls</option>
  <option value="The Rice Bowl">The Rice Bowl</option>

</select>
<br>
               <br>
               <div>
              <div class="b"><input type="submit" value="Submit" class="b3" name="submit"></div>
                </div>
        </form>
      </div>
    </body>
    </html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "random1";
$name='';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if(isset($_POST['submit']))
{
  $name=$_POST['rest'];
$sql = "SELECT * FROM review where restid in(select restid from restaurant where restname='$name')";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row   

  echo "<div class='t'><br><br><h3><center>$name</center></h3>";
  echo "<div class='hero'>";
  echo "<div class='tabl'>";
   echo "<table border='2' class='table table-striped'  align='center'>";
   
   
   echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reviews&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th></tr>";
  
  while($row = mysqli_fetch_assoc($result)) {

	echo  "<tr><td><div style='color:white;'>";
	echo  $row["reviews"];
	echo  "</div></div></td></tr>";
  }
   echo "</tabl>";
   echo "</div>";
   echo "</div>";
   echo '</div>';
} else {
  echo "<br><br><h4><div class='record'>No Records found!...</div></h4>";

}  

}
mysqli_close($conn);
?>

    
