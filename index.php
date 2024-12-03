<?php declare(strict_types = 1);
    echo "E1N1\n\n";

    $array = [5, 7, 3, 9, 1];

    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . " ";
    }

    echo "\n\nE2N1\n";

    $x = array(10, 20, 30, 40, 50, 60);
    $count = count($x);

    echo "\nLa medida del array 'x' es " . $count . "\n";

    unset($x[2]);
    $x = array_values($x);
    $count = count($x);

    echo "\nLa medida del array 'x' habiendo quitado un elemento es " . count($x) . "\n";

    // echo "\nE3N1\n";

    function verificarLetra(array $palabras, string $letra): bool {
        $existe = 0;
        $resultado = false;
        $letra = strtolower($letra);
        foreach ($palabras as $value) {
            $value = strtolower($value);
            for ($i = 0; $i < strlen($value); $i++) {
                if ($value[$i] == $letra) {
                    $existe++;
                    break;
                }
            }
        }
        if ($existe == count($palabras)) {
            $resultado = true;
        }
        return $resultado;
    }

    $palabras = ["Casa","Gato","Amigo"];
    verificarLetra($palabras, "A");
    verificarLetra($palabras, "i");

    // echo "\nE4N1\n";

    $datosPersonales = [
        "nombre" => "María Alejandra",
        "edad" => 36,
        "correo electrónico" => "aponteloaizam@gmail.com",
        "plato favorito" => "Sopa"
    ];
?>
