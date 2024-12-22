<?php 
$conn=new mysqli('localhost','root','','dbtable');
if(!$conn){
    die(mysqli_error($conn)); 
}
?>