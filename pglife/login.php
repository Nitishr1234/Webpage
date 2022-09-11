<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
  <body>
<?php require 'partials/_nav.php' ?>
<div class="container">

<h1 class="text-center"> login to our website </h1>

<form action=""    method="POST">
  <div class="mb-3 col-md-7">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3 col-md-7">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit">Submit</button>
</form>
</div>

<?php
session_start();

$servername="localhost";
    $usrename="root";
    $password="";
    $database="pglife";

    //create a connection

    $conn=mysqli_connect($servername,$usrename,$password,$database);
    if(!$conn)
    {
        echo "connection Failed:". mysqli_connect_error(); 
        exit;
    }


    if(isset($_POST['email']))
   {
    $email=$_POST['email'];
    $pass=$_POST['password'];


    $sql="SELECT * FROM `signup` WHERE  email='".$email."' AND password='".$pass."' limit 1";
    $result=mysqli_query($conn,$sql);
  //  $row=mysqli_fetch_assoc($result);
   }
    if(mysql_num_rows($result)==1) 
       {
        echo "Login Successful";
        exit();
       }
       else
        {
        echo "you have entered worng  password";
        exit();
       }
      
?>


  </body>
</html>