<?php

function quickSort($arr)
{
    $length = count($arr);
    if ($length <= 1)
    {
        return $arr;
    }

    //elegir un pivote(en este caso, el ultimo elemento arreglado)
    $pivot = $arr[$length - 1];

    //inicializar los arreglos para elementos menores y mayores al pivote
    $left = $right = [];

    //particionar el arreglo en elementos menores y mayores que el pivote
    for ($i = 0; $i < $length - 1; $i++){
        if ($arr[$i] < $pivot){
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }
    // Aplicar QuickSort de manera recursiva en las dos particiones
    $left = quickSort($left);
    $right = quickSort($right);

    // Combinar los resultados
    return array_merge($left,[$pivot], $right);
}

// Ejemplo de uso
$lista = [65, 66, 54, 25, 38, 1, 2, 3, 4, 5, 6, 11, 15, 18, 0];
$resultado = quickSort($lista);

echo"Lista Ordenada: ";
foreach ($resultado as $valor){
    echo $valor . "-";
}