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

echo "\nEjercicio 4\n";

$datos = [
    "nombre" => "Ale",
    "edad" => 36,
    "email" => "aponteloaizam@gmail.com",
    "comida" => "Café"
];

echo "Declaración de array asociativo de datos personales.\n";

echo "\nEjercicio 5\n";

$array1 = [2, 5.5, 7, 10, 3.2];
$array2 = [6, 1.7, 2, 16, 5.5];
$arrayComunes = [];
$arrayUnicos = [];

foreach ($array1 as $valor1) {
    foreach ($array2 as $valor2) {
        if ($valor1 == $valor2) {
            $arrayComunes[] = $valor1;
        }
    }
}

$arrayUnicos = array_merge($array1, $array2);
$arrayUnicos = array_unique($arrayUnicos);
$arrayUnicos = array_values($arrayUnicos);

echo "Imprimiendo la intersección de dos arrays.\n";
print_r($arrayComunes);
echo "\nImprimiendo la mezcla de dos arrays.\n";
print_r($arrayUnicos);

echo "\nEjercicio 6\n";

$registro = [
    "Juan" => [2, 5, 7, 8, 2],
    "Pedro" => [6, 6, 5, 2, 9],
    "Pablo" => [1, 1, 4, 6, 8]
];

$global = 0;
foreach ($registro as $nombre => $notas) {
    $suma = 0;
    foreach ($notas as $nota) {
        $suma += $nota;
    }
    $promedio = $suma/5;
    echo "El promedio de " . $nombre . " es de " . $promedio . " puntos.\n";
    $global += $promedio;
}

echo "El promedio global de la clase es de " . $global . " puntos.\n";

?>