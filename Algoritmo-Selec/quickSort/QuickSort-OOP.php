<?php

class Ordenar {
    public function quickSort($arr) {
        $length = count($arr);
        if ($length <= 1) {
            return $arr;
        }

        // Elegir un pivote (en este caso, el último elemento del arreglo)
        $pivot = $arr[$length - 1];

        // Inicializar los arreglos para elementos menores y mayores al pivote
        $left = $right = [];

        // Particionar el arreglo en elementos menores y mayores que el pivote
        for ($i = 0; $i < $length - 1; $i++) {
            if ($arr[$i] < $pivot) {
                $left[] = $arr[$i];
            } else {
                $right[] = $arr[$i];
            }
        }

        // Aplicar QuickSort de manera recursiva en las dos particiones
        $left = $this->quickSort($left);
        $right = $this->quickSort($right);

        // Combinar los resultados
        return array_merge($right, [$pivot], $left);
    }

    public function ListaOrdenada($lista) {
        $resultado = $this->quickSort($lista);

        echo "Lista Ordenada: ";
        foreach ($resultado as $valor) {
            echo $valor . "-";
        }
    }
}

// Ejemplo de uso
$ordenador = new Ordenar();
$lista = [65, 66, 11, 12, 5];
$ordenador->ListaOrdenada($lista);

?>
