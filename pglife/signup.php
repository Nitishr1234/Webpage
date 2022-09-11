<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Signup</title>
  <body>
<?php require 'partials/_nav.php' ?>
<div class="container">

<h1 class="text-center"> Signup to our website </h1>

<form   action="demo.php"   method="post">
  <div class="mb-3 col-md-7">
    <label for="exampleInputEmail1" class="form-label" >Email Id</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"  name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3 col-md-7">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"  name="password">
  </div>
  <div class="mb-3 col-md-7">
    <label for="exampleInputEmail1" class="form-label" >Address</label>
    <input type="text" class="form-control" id="address" aria-describedby="emailHelp"  name="address">
  </div>
  <div class="mb-3 col-md-7">
    <label for="exampleInputEmail1" class="form-label" >Contact</label>
    <input type="number" class="form-control" id="connect" aria-describedby="emailHelp"  name="contact">
  </div>
  <div class="mb-3 form-check col-md-7">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" onclick="msg()">Submit</button>
</form>
</div>
<script>
function msg(){
  alert("Successful Registion");

}
</script>

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
  
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>