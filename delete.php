<?php
include("conexion.php"); 
$con= connection();
$ID=$_GET['id'];

$sql3="DELETE FROM usuarios WHERE Id='$ID'";

$query= mysqli_query($con,$sql3);

if($query){

    header("location:index.php");
};
?>