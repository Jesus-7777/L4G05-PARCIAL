<?php
    include('includes/db.php');
    if(isset($_GET['id']) == false){
        echo "Es necesario enviar un id";
        die;
    }
    $id = $_GET['id'];
    $sql = "select * from usuario where id= $id";
    $persona = DB::query($sql);
    $persona = mysqli_fetch_object($persona);
    if($persona == false){
        echo "El usuario no existe";
        die;
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuarios</title>
</head>
<body>

        <h1>
            Editar usuario
        </h1>   
    <form action="guardar.php" method="post">
    <input type="hidden" name="id" value="<?= $persona->id ?>">
            <tr>
                <th>Nombres</th>
                <td><input type="text" name="nombre"  value="<?= $persona->nombres ?>"></td>
                <th>Apellidos</th>
                <td><input type="text" name="apellido"  value="<?= $persona->apellidos ?>"></td>
                <th>Email</th>
                <td><input type="text" name="email"  value="<?= $persona->email?>"></td>
                <th>password</th>
                <td><input type="password" name="password"  value=""></td><br>
                <th>Estado</th>
                <td>
                <?php  if($persona->estado == "activo"){  ?>
                    <input type="radio" name="estado" value="activo" checked>Activo<br>
                    <input type="radio" name="estado" value="inactivo">Inactivo
                <?php  }else{  ?>
                    <input type="radio" name="estado" value="activo" >Activo
                    <input type="radio" name="estado" value="inactivo" checked>Inactivo
                <?php  }  ?>
                </td>
            </tr>

            <tr>
                <td><br><button type="submit">Guardar</button></td>
                <td><button><a href="imprimir.php">Lista de usuarios</a></button></td>
            
            </tr>
    </form>

</body>
</html>