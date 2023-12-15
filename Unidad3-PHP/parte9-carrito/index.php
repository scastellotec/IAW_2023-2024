<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="add.php" method="get">
        <input type="number" name="numeroNuevo">
        <input type="submit">
    </form>
    <ul>
        <?php
            session_start();

            if(isset($_SESSION['numerosGuardados'])){

                $numerosAux = $_SESSION['numerosGuardados'];

                for($i=0; $i<count($numerosAux); $i++){
                    echo "<li>".$numerosAux[$i];
                    echo "<a href='borrar.php?id=$i'>Borrar</a>";
                    echo "</li>";
                }
                
            }
        ?>
    </ul>


    <ul>
        <?php

            if(isset($_SESSION['numerosGuardados'])){

                $numerosAux = $_SESSION['numerosGuardados'];

                foreach($numerosAux as $posicion => $valor){
                    echo "<li>".$valor;
                    echo "<a href='borrar.php?id=$posicion'>Borrar</a>";
                    echo "</li>";
                }
                
            }
        ?>
    </ul>

    <a href="vaciar.php">Vaciar</a>
</body>
</html>