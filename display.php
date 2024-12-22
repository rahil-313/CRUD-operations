<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <button class="btn btn-primary"><a href="user.php" class="text-light">Add user</a></button>
        <table class="table table-hover">
        <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Purchased items</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
   <?php
   $sql="Select * from `dbpro`";
   $result=mysqli_query($conn,$sql);
   if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $purchaseditem=$row['purchaseditem'];
        print '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$purchaseditem.'</td>
        <td><button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button><button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button></td>
       
        
      </tr>';
    }
   
   }
   
   ?>
 
  </tbody>
</table>
    </div>
</body>
</html>