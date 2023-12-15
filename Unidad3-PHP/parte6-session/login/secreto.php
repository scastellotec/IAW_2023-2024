<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Secreto</h1>
    <?php
        session_start();
        if(!isset($_SESSION["logged"]) && $_SESSION["nombre"] != "admin"){
            header("Location: index.php");
        }
            
        echo "<p>Bienvenido a tu sitio secreto ".$_SESSION["nombre"]."<p>";
    ?>
    <p><a href="logout.php">Cerrar sesion</a></p>
</body>
</html>