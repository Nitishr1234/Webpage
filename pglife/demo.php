<?php

$servername="localhost";
$username="root";
$password="";
$database="pglife";


$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
  
  echo "Connection error".mysqli_error();
}

  if(isset($_POST['submit'])){

    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];

$sql="INSERT INTO `signup` ( `email`, `password`, `address`, `contact`) VALUES ('$email', '$password', '$address', '$contact')";

$result=mysqli_query($conn,$sql);

if(!$result)
{
    echo "<br>". "your data is not inserted".mysqli_error();
}
else{
  ?>
    <div class="alert alert-primary" role="alert">
  Registation successfully
  </div> 
  <?php
}
  }
  header("Location:login.php");
  
?>
<?php

$servername="localhost";
$username="root";
$password="";
$database="pglife";


$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
  
  echo "Connection error".mysqli_error();
}

  if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

$sql="INSERT INTO `contact`( `name`, `email`, `message`) VALUES ('$name','$email','$message')";

$result=mysqli_query($conn,$sql);
 
if(!$result)
{
    echo "<br>". "your data is not inserted".mysqli_error();
}
else{
  ?>
    <div class="alert alert-primary" role="alert">
  Registation successfully
  </div> 
  <?php
}
header("Location:index.php");
  }
 
?>