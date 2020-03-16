<?php 
    include('includes/db.php');

    $sql = "select * from usuario";
    
    $result = DB::query($sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
</head>
<body>

        <h1>
            Listado de Usuarios<br>
        </h1>
 
        <table >
       
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
          

           
            <?php while($mostrar=mysqli_fetch_array($result)){ ?>
            <tr>
                <td><?= $mostrar['id'] ?></td>
                <td><?= $mostrar['nombres'] ?></td>
                <td><?= $mostrar['apellidos'] ?></td>
                <td><?= $mostrar['email'] ?></td>
                <td class="<?= $mostrar['estado'] ?>"><?= $mostrar['estado'] ?></td>
                <input type="hidden" name="estado" value="<?= $mostrar['estado']?>">
                <td>
                    <?php  if($mostrar['estado'] == "activo"){  ?>
                        <a href="guardar.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>">Inactivar</a>
                    <?php  }else{  ?>
                        <a href="guardar.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>">Activar</a>
                    <?php  }  ?>
                </td>
               
            </tr>
            <?php } ?>
         </table   >
      <tr>
      <br>
      <td>
      <button><a href="index.php">registrar</a></button>
      </td>
      </tr>
</body>
</html>