<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $purchaseditem=$_POST['purchaseditem'];

  $sql="insert into `dbpro`  (name,email,mobile,purchaseditem)values('$name','$email','$mobile','$purchaseditem')";
  $result=mysqli_query($conn,$sql);
  if($result){
       header('location:display.php');
  }else{
    die(mysqli_error($conn));
  } 
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <title>project</title>
  </head>
  <body>
  <div class="container my-5">
  <form method="post">
  <div class="form-group">
    <label >Name</label><br><br>
    <input type="text" class="form-control"
     placeholder="Enter your name" name="name"> 
  </div>
<br><br>
<div class="form-group">
    <label >Email</label><br><br>
    <input type="email" class="form-control"
     placeholder="Enter your Email" name="email"> 
  </div>
<br><br>
<div class="form-group">
    <label >Mobile</label><br><br>
    <input type="text" class="form-control" 
    placeholder="Enter your mobile number" name="mobile"> 
  </div>
<br><br>
<div class="form-group">
    <label >purchased items</label><br><br>
    <input type="text" class="form-control" 
    placeholder="Enter your purchased items" name="purchaseditem"> 
  </div>
<br><br>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

  </div>

 
  </body>
</html>
