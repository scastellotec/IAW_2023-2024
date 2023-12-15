<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <h2>Formulario de Información</h2>

    <?php
        session_start();
        if (isset($_SESSION['mensaje'])){
            echo "<p>".$_SESSION['mensaje']."</p>";
            unset($_SESSION['mensaje']);
            //session_destroy();
        }
    ?>

    <form action="grabar.php" method="GET">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">

        <br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido">

        <br>

        <label for="ciclo">Ciclo Formativo:</label>
        <input type="text" id="ciclo" name="ciclo">

        <br>

        <input type="submit" value="Enviar">
    </form>

    <?php
    include("bbdd.php");
    // Construimos la consulta
    $sql = "select * from usuarios where estado=1";
    // Ejecutamos y recogemos el resultado
    $result = $conn->query($sql);
    // si quiero saber el numero de registros encontrados
    $row_count = $result->num_rows;
    ?>
        <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Ciclo</th>
            <th>Email</th>
            <th>Estado</th>
            <th>Ultima_modificacion</th>
            <th>Desactivar</th>
        </tr>
    <?php
    // Si quiero mostrarlos o recorrerlos
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['nombre']."</td>";
        echo "<td>".$row['apellido']."</td>";
        echo "<td>".$row['ciclo']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['estado']."</td>";
        echo "<td>".$row['ultima_modificacion']."</td>";
        $id = $row['id'];
        echo "<td><a href='desactivar.php?id=$id'>Borrar</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<p>Total de usuarios $row_count</p>";

    // Cierro conexion
    $conn->close();
    ?>

</body>
</html>
