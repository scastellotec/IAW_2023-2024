<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Examen Nov 2022</title>
</head>
<body>
    <h1>Mi lista de tareas</h1>
    <p>
        <?php
            session_start();
            // Compruebo si existe el mensaje (en la primera carga no existira)
            if(isset($_SESSION['mensaje'])){
                echo $_SESSION['mensaje']; // Muestro el mensaje
                unset($_SESSION['mensaje']); // Lo borro para que no siga apareciendo
            }
        ?>
    </p>
    <form action="grabar.php" method="post">
        <label for="texto">Texto de la tarea:</label><br>
        <input type="text" id="texto" name="texto" size="32"><br><br>
        <label for="fecha_finalizacion">Fecha finalización:</label><br>
        <input type="date" id="fecha_finalizacion" name="fecha_finalizacion"><br><br>
        <input type="submit" value="enviar">
    <form>
    <br/>
    <?php
       
        // Muestro el contenido de la BBDD

        // Crear una conexión
        include('conexionbbdd.php');

        // Construimos la consulta
        $sql = "select * from tareas where estado=1";

        // Ejecutamos y recogemos el resultado
        $result = $conn->query($sql);

        // Iteramos por cada registro (linea por linea) encontrado en la BBDD
        echo "<table border='1'>";

        echo "<tr>";
            echo "<th>ID</td>"; 
            echo "<th>Texto</td>"; 
            echo "<th>Estado</td>"; 
            echo "<th>Fecha Fin</td>"; 
            echo "<th>Fecha Crea</td>";  
            echo "<th>Borrar</td>";  
            echo "<th>Completar</td>";  
        echo "</tr>";

            while($row = $result->fetch_assoc()) {
                // El nombre a buscar el $row coincide con el nombre de las columnas
                if($row['estado']==1){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>"; 
                    echo "<td>".$row['texto']."</td>"; 
                    echo "<td>".$row['estado']."</td>"; 
                    echo "<td>".$row['fecha_finalizacion']."</td>"; 
                    echo "<td>".$row['fecha_creacion']."</td>"; 
                    echo "<td><a href='borrar.php?idborrar=".$row['id']."'>X</a></td>"; 
                    echo "<td><a href='update.php?idmodificar=".$row['id']."'>X</a></td>"; 
                    echo "</tr>";
                }
            }
        echo "</table>";

        // Cuento el numero de filas que me devuelve SQL
        $row_count = $result->num_rows;
        echo "<p>Tareas pendientes: $row_count</p>";

        // He terminado de mostrar todas las lineas y cierro la conexion
        $conn->close();

    ?>
</body>
</html>