 <!DOCTYPE html>
 <html>
 <?php
 $msg='';
 $msg1='';
 $msg2='';
 $msg3='';
 $msg4='';
 $cust_id='';
 $name='';
 $email='';
 $contact_no='';
 $image='';

 session_start();
$conn=mysqli_connect("localhost","root","","random1");


if(isset($_POST['submit']))
{

$cust_id=$_POST['cust_id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];
$contact_no=$_POST['contact_no'];
$image=$_FILES['image']['name'];
$tmp_image=$_FILES['image']['tmp_name'];
$_SESSION['cust_id'] = $_POST['cust_id'];
if(strlen($password)<5)
{
  $msg="<div class='error'>Passsword must contain atleast 5 characters</div>";
}
else if($password!==$rpassword)
{
  $msg1="<div class='error'>Passsword is not same</div>";
}
else if((strlen($contact_no)!=10) || (!preg_match("/^[6-9]\d{9}$/", $contact_no)))
{
  $msg4="<div class='error'>Invalid contact number</div";
}

else{
  //$password=md5($password); for encrypting the password so that backend programmer cannot see it 
  $img_ext=explode(".",$image);
  $image_ext=$img_ext['1'];//first index of the array excluding the delimiter
  if($image_ext=='jpg' || $image_ext=='png' || $image_ext=='jpeg' || $image_ext=='PNG' || $image_ext=='JPG' || $image_ext=='JPEG')
{
move_uploaded_file($tmp_image, "images/$image");//uploaded file is transferred into this images
$q1="insert into customer(username,email,name,phoneno,password,images) values('$cust_id','$email','$name','$contact_no','$password','$image')";
$sql="select * from customer where username='".$cust_id."'";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res)==1) {
    $msg2="<div class='error'>Username taken</div>";

  
}
else{
$run=mysqli_query($conn,$q1);

if($run)
{
  
  header("location: loginpage.php");
}
else
{
  echo "not inserted";
}
}}
else
{
    $msg3="<div class='error'>only jpg, jpeg, png format</div>";

}
}

}


 ?>
 <head>
        <title>Sign Up Form</title>
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="signup.css">
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
        
    </head>
    <style type="text/css">
      body
      {
        background-color: #DDDDDD;
      }
      .error
      {
        color: red;
      }
    </style>
    <body> 

      <form method="POST" enctype="multipart/form-data">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <legend>Enter your details here</legend>
          <br>
          
          <label for="cust_id">Username:</label>
          
          <input type="text" name="cust_id" value='<?php echo $cust_id;?>'required>
          <?php echo $msg2; ?>
        
          
          <label for="name">Name:</label>
          <input type="text" id="name" value='<?php echo $name;?>'
          name="name" required>
          
          <label for="mail">Email:</label>
          <input type="email" id="email" 
          name="email" value='<?php echo $email;?>' required>

         <label for ="contact_no">Contact Number:
         </label>
         <input type="tel" name="contact_no"  value='<?php echo $contact_no;?>' required>
         <?php echo $msg4; ?>
          
          <label for="password">Password:</label>
          <input type="password" id="password" 
          name="password" required>
          <?php echo $msg; ?>

          <label>Re-enter Password:</label>
          <input type="password" name="rpassword"  required="">
          <?php echo $msg1; ?>
         <label>Profile Image:</label>
         <br>
         <input type='file' name='image' value='<?php echo $image;?>' required="" />
         <?php echo $msg3; ?>
         <br>
        </fieldset>

        <br>
        
        <button type="submit" name="submit">Sign Up</button>
      </form>

    </body>
</html>
