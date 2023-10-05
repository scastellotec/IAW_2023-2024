<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Almacena un texto o frase larga en una variable.
        $frase = "El éxito depende del esfuerzo.";
        
        //Muestra su contenido por pantalla.
        echo "<p>$frase</p>";
        
        //Modo clasico: Cuenta el número de apariciones de cada una de las vocales.
        $numA = 0;$numE = 0;$numI = 0;$numO = 0;$numU = 0;

        for($i=0; $i<strlen($frase);$i++){
            if($frase[$i]=="a"){$numA++;}
            elseif($frase[$i]=="e"){$numE++;}
            elseif($frase[$i]=="i"){$numI++;}
            elseif($frase[$i]=="o"){$numO++;}
            elseif($frase[$i]=="u"){$numU++;}
        }

        echo "<ul>";
        echo "<li>a: $numA</li>";
        echo "<li>e: $numE</li>";
        echo "<li>i: $numI</li>";
        echo "<li>o: $numO</li>";
        echo "<li>u: $numU</li>";
        echo "</ul>";

        //Modo funcional: Cuenta el número de apariciones de cada una de las vocales.
        //Almacenarlo en un array o diccionario
        $contador = [
            'a' => 0,
            'e' => 0,
            'i' => 0,
            'o' => 0,
            'u' => 0,
        ];

        for($i=0; $i<strlen($frase);$i++){
            if($frase[$i]=="a"){$contador['a']++;}
            elseif($frase[$i]=="e"){$contador['e']++;}
            elseif($frase[$i]=="i"){$contador['i']++;}
            elseif($frase[$i]=="o"){$contador['o']++;}
            elseif($frase[$i]=="u"){$contador['u']++;}
        }

        //Muestra el resultado por pantalla
        var_dump($contador); echo "<br/>";

        // Modo mas avanzado: usando funciones
        $contador = ['a' => 0,'e' => 0,'i' => 0,'o' => 0,'u' => 0];

        $contador['a'] = substr_count($frase,'a');
        $contador['e'] = substr_count($frase,'e');
        $contador['i'] = substr_count($frase,'i');
        $contador['o'] = substr_count($frase,'o');
        $contador['u'] = substr_count($frase,'u');

        //Muestra el resultado por pantalla
        var_dump($contador); echo "<br/>";

        //Resalta la vocal que más veces ha aparecido, si hay empate resalta las dos.
        
    ?>
</body>
</html>