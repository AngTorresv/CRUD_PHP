<?php
include("conexion.php");
$con= connection();

$Id = null;
$name= trim($_POST['name']);
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
if(strlen($name)>=1 && strlen($lastname)>=1 && strlen($username)>=1 && strlen($password)>=1 && strlen($email)>=1){
     $sql2="INSERT INTO usuarios VALUES('$Id','$name','$lastname','$username','$password','$email')";
     $query=mysqli_query($con,$sql2);

     if($query){

       header("location:index.php");
      
     }
}else {
    
     header("location:index.php");
}

?>
