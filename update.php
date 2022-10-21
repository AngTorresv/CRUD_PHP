<?php
include("conexion.php"); 

$con= connection();

$id=$_GET['id'];

$sql="SELECT* FROM usuarios WHERE Id='$id'";

$query= mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar Usuario</title>
    <div>
        <form action="edit_user.php" method="post" >
          <h1>Editar Usuario</h1>
          <input type="hidden" name="id" value="<?=$row['Id']?>">
          <br>
          <input type="text" name="name" placeholder="Nombre" value=<?=$row['name']?>>
          <br>
          <input type="text" name="lastname" placeholder="Apellido" value=<?=$row['lastname']?>>
          <br>
          <input type="text" name="username" placeholder="Nombre de Usuario" value=<?=$row['username']?>>
          <br>
          <input type="password" name="password"placeholder="Contraseña" value=<?=$row['password']?>>
          <br>
          <input type="text" name="email" placeholder="Email" value=<?=$row['email']?>>
          <br>
          <input type="submit" value="Actulizar Informacion">
        </from>  
    </div>
</head>
<body>
    
</body>
</html>