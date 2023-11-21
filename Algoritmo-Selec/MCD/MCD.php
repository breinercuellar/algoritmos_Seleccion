<?php

class CalculadoraMCD {
    public function calcularMCD($num1, $num2) {
        while ($num2 != 0) {
            $temp = $num2;
            $num2 = $num1 % $num2;
            $num1 = $temp;
        }

        return abs($num1);
    }
}

// Ejemplo de uso
$calculadora = new CalculadoraMCD();
$numero1 = 88;
$numero2 = 18;

$mcd = $calculadora->calcularMCD($numero1, $numero2);

echo "El Máximo Común Divisor (MCD) de $numero1 y $numero2 es: $mcd\n";

?>
