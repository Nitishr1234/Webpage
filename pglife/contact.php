<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">
    <title>login</title>
  <body>
<?php require 'partials/_nav.php' ?>

<div class="main-container">
<div class="container">
    <div class="box">
      <img src="location-removebg-preview.png">
      <h5> OUR MAIN OFFICE</h5>
      <h6>DCC,Near Parbatti Kali Mandir,Bhagalpur</h6>
    </div>
    <div class="box">
    <img src="call-removebg-preview.png">
      <h5> PHONE NUMBER</h5>
      <h6>+91 6203746218</h6>
      <h6>+6209-96425(Toll free)</h6>
    </div>
    <div class="box">
    <img src="fax-removebg-preview.png">
      <h5> FAX</h5>
      <h6>1-23-456-78900</h6>
    </div>
    <div class="box">
    <img src="email-removebg-preview.png">
      <h5> E-MAIL</h5>
      <h6>Nitishr486@gmail.com</h6>
    </div>
</div>
<div class="box-container">
  <h3>Contact Us</h3>
  <form   action="demo.php"   method="post">
  <input type="text" placeholder="Enter Your Name" name="name"><br>
  <input type="text" placeholder="Enter Your Valid Email" name="email">
  <input class="message" type="text" placeholder="" name="message"><br>
  <button type="submit" name="submit" onclick="msg()">Submit</button>
  </form>
</div>
</div>
<script>
function msg(){
  alert("Do you want to submit");

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

 }
  }
  
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>