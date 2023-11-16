<?php
    include "header.php";
?>
    <h2>Producto en oferta:</h2>
    <?php
        /* Muestro el contenido de la BBDD*/

        // Crear una conexión
        include('conexionbbdd.php');
        //$conn = new mysqli("localhost", "root", "", "proyectoPHP");

        // Construimos la consulta
        $sql = "select * from productos";

        // Ejecutamos y recogemos el resultado
        $result = $conn->query($sql);

        // Iteramos por cada registro (linea por linea) encontrado en la BBDD
        echo "<div id='productos'>";

            // Cuento el numero de filas que me devuelve SQL
            $row_count = $result->num_rows;
            echo "<strong>$row_count Productos disponibles</strong>";

            while($row = $result->fetch_assoc()) {
                    echo "<article>";
                    echo "<ul>";
                    echo "<li>".$row['id']."</li>"; 
                    echo "<li>".$row['nombre']."</li>"; 
                    echo "<li>".$row['descripcion']."</li>"; 
                    echo "<li>".$row['stock']."</li>"; 
                    echo "<li>".$row['precio']."</li>";
                    echo "<li><a href='addCarrito.php?id=1'>Comprar</a></li>";

                    echo "</ul>"; 
                    echo "</article>";
            }
        echo "</div>";
        // Cierro la conexion
        $conn->close();
    ?>
<?php
    include "footer.php";
?>