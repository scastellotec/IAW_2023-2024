<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
	<style>
		.mal{
			color: red;
		}
		.bien{
			color: green;
		}
	</style>
</head>
<body>
    <h2>Registro de Usuarios</h2>
	<ul>
		<li class="mal">Nombre debe ser entre 2 y 5 caracteres</li>
		<li class="mal">Contraseñas deben ser iguales</li>
		<li class="mal">Contraseña al menos 5 caracteres</li>
		<li class="mal">Campos email no debe estar vacio</li>
	</ul>

    <?php
        // Si existe un mensaje lo muestro, sino no porque daría error
        session_start();
        if (isset($_SESSION['msg'])){
            echo "<h2>".$_SESSION['msg']."</h2>";
            // Borro el mensaje para que no vuelva a aparecer
            unset($_SESSION['msg']);
        }

    ?>
    <form action="grabar.php" method="post">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <label for="confirm_password">Confirmar Contraseña:</label>
            <input type="password" id="confirm_password" name="confirm_password">
        </div>
        <div>
            <input type="submit">Registrarse</button>
        </div>
    </form>

    <?php
        // Crear una conexión
        include ("conexion.php");
        // Construimos la consulta
        $sql = "select * from usuarios";
        // Ejecutamos y recogemos el resultado
        $result = $conn->query($sql);
        // si quiero saber el numero de registros encontrados
        $row_count = $result->num_rows;

        echo "<p>Hay un total de ".$row_count." de usuarios.</p>";

        if($row_count >= 1){
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nombre</th>";
            echo "<th>Email</th>";
            echo "<th>Contraseña</th>";
            echo "<th>Fecha modificacion</th>";
            echo "<th></th>";
            echo "<th></th>";
            echo "</tr>";

            // Si quiero mostrarlos o recorrerlos
            while($row = $result->fetch_assoc()) {
                if(isset($_REQUEST['modificar']) && $row['id'] == $_REQUEST['id'] ){
                    // La fila de la tabla como formulario
                    echo "<tr>";
                    echo "<form action='modificar.php' method='post'>";
                        echo "<td><input type='text' name='id' value='".$row['id']."' readonly/></td>";
                        echo "<td><input type='text' name='nombre' value='".$row['nombre']."'/></td>";
                        echo "<td><input type='email' name='email' value='".$row['email']."'/></td>";
                        echo "<td><input type='text' name='password' value='".$row['password']."'/></td>";
                        echo "<td>".$row['ultima_modificacion']."</td>";
                        echo "<td colspan='2'><input type='submit' value='Enviar'/></td>";
                    echo "</form>";
                    echo "</tr>";
                } else {
                    // La fila de una tabla normal
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nombre']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['password']."</td>";
                    echo "<td>".$row['ultima_modificacion']."</td>";
                    echo "<td><a href='eliminar.php?id=".$row['id']."'>Borrar</a></td>";
                    echo "<td><a href='index.php?modificar=si&id=".$row['id']."'>Modificar</a></td>";
                    echo "</tr>";
                }
            }
        }

        // Cierro conexion
        $conn->close();
    ?>
    
</body>
</html>
