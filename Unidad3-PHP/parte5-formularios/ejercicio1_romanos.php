<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        Escribe un numero romano:<br/>
        <input type="text" name="numeroRomano">
        <input type="submit">
    </form>
    <?php
        // Me aseguro que me llega el numero y no esta vacio
        if(isset($_REQUEST['numeroRomano']) && !empty($_REQUEST['numeroRomano'])){
            // Recoger el numero del usuario
            $nromano = strtoupper($_REQUEST['numeroRomano']);
            // Mostrar el numero enviado
            echo $nromano;

            $equivalencias = [
                'I' => 1,
                'V' => 5,
                'X' => 10,
                'L' => 50,
                'C' => 100,
                'D' => 500,
                'M' => 1000
            ];

            // Paso el numero romano a decimal
            $resultado = 0;
            $resto = 0;
            for($i=0; $i<strlen($nromano); $i++){
                // antes de sumar tendria que mirar sino es un numero que resta
                if($i==strlen($nromano)-1){
                    $resultado = $resultado + $equivalencias[$nromano[$i]] - $resto;
                    $resto = 0;
                }elseif($equivalencias[$nromano[$i]] < $equivalencias[$nromano[$i+1]]){
                    $resto = $equivalencias[$nromano[$i]];
                } else {
                    $resultado = $resultado + $equivalencias[$nromano[$i]] - $resto;
                    $resto = 0;
                }
            }

            echo "<p>$resultado</p>";
        }

    ?>
</body>
</html>