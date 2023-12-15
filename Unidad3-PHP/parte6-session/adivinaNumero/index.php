<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="adivina.php" method="get">
        ¿Que numero crees que es?
        <input type="text" name="numero"/><br/>
        Marca si quierse partida nueva
        <input type="checkbox" name="nueva"><br/>
        <input type="submit"/>
    </form>
    <?php
        // Siempre inicio session antes de usarla
        session_start();
        // Compruebo que hay un mensaje antes de mostrarlo, y evito errores
        if(isset($_SESSION['msg'])){
            echo "<p>".$_SESSION['msg']."</p>";
            echo "<ul>";
            for($i=0; $i<count($_SESSION['numerosProbados']); $i++){
                echo "<li>".$_SESSION['numerosProbados'][$i]."</li>";
            }
            echo "</ul>";
        }
    ?>
</body>
</html>