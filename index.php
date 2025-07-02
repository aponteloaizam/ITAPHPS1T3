<?php

echo "Ejercicio 1\n";

$array = [1, 2, 3, 4, 5];

echo "Imprimiendo los valores de un array.\nNúmeros Enteros: ";

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . " ";
}

echo "\n\nEjercicio 2\n";

$x = array(10, 20, 30, 40, 50, 60);

echo "Imprimiendo el array original.\n";

print_r($x);

echo "El tamaño del array es de " . count($x) . " valores.\n";

unset($x[4]);
$x = array_values($x);

echo "Imprimiendo el array tras eliminar elemento y reindexar claves.\n";

print_r($x);

echo "El tamaño del nuevo array es de " . count($x) . " valores.\n";

echo "\nEjercicio 3\n";

$palabras = [];
$caracter = "";

function validar(array $palabras, string $caracter): bool {
    $contador = 0;
    $resultado = false;
    foreach ($palabras as $valor) {
        $valor = strtolower($valor);
        $caracter = strtolower($caracter);
        for ($i = 0; $i < strlen($valor); $i++) {
            if ($valor[$i] == $caracter) {
                $contador++;
                break;
            }
        }
    }
    if ($contador == count($palabras)) {
        $resultado = true;
    }
    return $resultado;
}

echo "Desarrollo de función que valida si un caracter se encuentra en todas las palabras de un array.\n";

?>