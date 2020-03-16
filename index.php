<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuarios</title>
</head>
<body> 
        <h1>
         Ingresar usuario
        </h1>      
    <form action="guardar.php" method="post">
               <tr>
                <th>Nombres</th>
                <td><input type="text" name="nombre" ></td>
                <th>Apellidos</th>
                <td><input type="text" name="apellido" ></td>
                <th>Email</th>
                <td><input type="text" name="email" ></td>
                <th>password</th>
                <td><input type="password" name="password" ></td>
            </tr> 
            <br>    
            <tr>
            <td><button type="submit">Guardar</button></td>
            <td><button> <a href="imprimir.php">Imprimir usuarios</a></button></td>
            </tr>  
    </form>
</body>
</html>