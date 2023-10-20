<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio2_piedrapapeltijera.php" method="get">
        Escoge una opcion:<br/>
        <input type="radio" name="opcion" value="1"/> Piedra<br/>
        <input type="radio" name="opcion" value="2"/> Papel<br/>
        <input type="radio" name="opcion" value="3"/> Tijera<br/>

        <input type="submit"/>
    </form>

    <?php
        // Compruebo que el usuario me envia el parametro
            /* Faltaria por validar que sea un numero entre 1 y 3 incluidos  */
        if(isset($_REQUEST['opcion']) && !empty($_REQUEST['opcion'])){
            // Recogo el parametro
            $opcionUsuario = $_REQUEST['opcion'];
            // Muestro por pantalla lo que el usuario elige
            echo "<p>El usuario ha elegido $opcionUsuario</p>";

            // Opcion de la maquina [Piedra 1, Papel 2, Tijera 3]
            $opcionOrdenador = rand(1,3);
            // Muestro lo que genera el ordenador
            echo "<p>El ordenador ha elegido $opcionOrdenador</p>";

            // Calcular el resultado
            if($opcionOrdenador == $opcionUsuario){
                echo "<p>empate</p>";
            }elseif (($opcionOrdenador==1 && $opcionUsuario==3) ||
                        ($opcionOrdenador==2 && $opcionUsuario==1) ||
                            ($opcionOrdenador==3 && $opcionUsuario==2)){
                echo "<p>Gana el ordenador</p>";
            }else{
                echo "<p>Gana el usuario</p>";
            }
        } else{
            echo "No has enviado nada";
        }

    ?>
</body>
</html>