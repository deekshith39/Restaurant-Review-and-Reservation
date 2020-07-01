<html>
<?php
session_start();
$e=$_SESSION['username'];
$msg='';
$msg1='';
$host="localhost";

$dbusername="root";
$dbpassword="";
$db="random1";
$cn = mysqli_connect($host, $dbusername, $dbpassword, $db);

if(isset($_POST['submit'])){

    $Restaurantname=$_POST['rn'];
    $reviews = $_POST['rv'];
    $userId=$e;
    $resti=mysqli_query($cn,"select restid from restaurant where restname='$Restaurantname';");
    $retrieve=mysqli_fetch_array($resti);
    if(empty($retrieve))
  {
    $msg = "<div class='msg1'><h3 style='color:red;'>Invalid restaurant name!</h3></div>";
}
else{
    
    $restid =$retrieve['restid'];
   

  $sql="insert into review(reviews,restid,userid) values ('$reviews','$restid','$e');";
  mysqli_query($cn,$sql);
   $msg1="<div class='msg'><h3 style='color:green';>You review has been recorded!</h3></div>";

}


}


  ?>
    <head>
        
        <link rel="stylesheet" type="text/css" href="restaurant.css">
        <style>
          
  .msg
  {
    padding-left: 49%;
  }
  .msg1
  {
    padding-left: 50%;
  }

        body
        {
            background-color:#fff;
        }
        form
        {
              padding-left: 18%;
  padding-top: 7%;
  font-family: arial,georgia;
  font-size: 100%;
  color: #fff;
  border:25px;
}
          
        }
        textarea
        {
            resize: none;
        }
        textarea
        {
            width: 320px;
            height: 250px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            resize: none;
        }
  
        h1{
            padding-left: : 13%;
            margin: 0px;
                font-size: 35px;
                font-display: center;
                font-family: arial,georgia;
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
  color: #fff;
  height: 40px;
  font-size: 66%;
}


.box
{ width:500px;
  height: 505px;
  background: #000;
  color:#fff;
  position: absolute;
  top:23%;
  left: 41%;
}


.box input[type="submit"]
{
  border: none;
  outline: none;
  height: 40px;
  background: #fb2525;
  color: #fff
  font-size:18px;
 
}

.box input[type="submit"]:hover
{
  cursor: pointer;
  background: #ffc107;
  color:#000;
}

.b3
{
  margin-left: 18%;
  height: 35%;
  width:50%;

}

        </style>
    </head>
    <body>
    <br>

        <h1>WRITE REVIEWS</h1>
        <br>
        <hr>
        <div class="sidenav">
  <br>
        <a href="profile.php">Profile</a><br>
      <a href="home.html">Home</a><br>
      <a href="reviews.html">Review</a><br>
      <a href="restaurant.html">Reserve</a><br>
      <a href="logout.php">Logout</a><br>

      </div>
          <div class="box">
        <form  method="POST">
                
                <label>Restaurant Name : </label>
                &nbsp;&nbsp;
                 <select id="rn" name="rn">
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
                <br><br><br>
                <label>Review : </label>
                &nbsp;&nbsp;<br><br>
                <textarea name="rv"  placeholder="Enter your Review Here" ></textarea></br>
        <br>
              <input type="submit" name ="submit" value="Submit" class="b3">
           
        </form>
        
        </div>
    </body>
    <?php echo $msg; ?>
    <?php echo $msg1; ?>

    </html>