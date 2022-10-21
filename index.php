<?php 
include("conexion.php"); 

$con= connection();
$sql="SELECT* FROM usuarios ";
$query= mysqli_query($con,$sql);


 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    </head> 
    <body>
      <div> 
        <form action="insert_user.php" method="post" >
          <h1>Crear Usuario</h1>
          <input type="text" name="name" placeholder="Nombre">
          <br>
          <input type="text" name="lastname" placeholder="Apellido">
          <br>
          <input type="text" name="username" placeholder="Nombre de Usuario">
          <br>
          <input type="password" name="password"placeholder="Contraseña">
          <br>
          <input type="text" name="email" placeholder="Email">
          <br>
          <input type="submit" name="Agregar Usuario">
        </from>  
       </div>
    <div>
        <h1><label>Usuarios Registrados</label></h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nombre Usuario</th>
                    <th>Contraseña</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <th><?=$row['Id']?></th>
                    <th><?=$row['name']?></th>
                    <th><?=$row['lastname']?></th>
                    <th><?=$row['username']?></th>
                    <th><?=$row['password']?></th>
                    <th><?=$row['email']?></th>

                    <th>
                        <a href="update.php?id=<?=$row['Id']?>" class="botton">Editar</a>
                    </th>
                    <th>        
                        <a href="delete.php?id=<?=$row['Id']?>" class="botton">Eliminar</a>
                    </th>
                    <?php endwhile; ?>
                </tr>    
            </tbody>
        </table>
      </div>
    </body>
</html>