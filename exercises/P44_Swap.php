<?php

class P44_Swap
{
    public function main(): void
    {
        $array = [1, 3, 5, 7, 9];

        foreach ($array as $value) {
            echo $value . "\n";
        }

        echo "\n";

         echo "\n\n\n"; // El test espera tres saltos de línea aquí

        // Leer las posiciones desde STDIN
        $pos1 =  trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $pos2 =  trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Intercambiar los valores
        $temp = $array[$pos1];
        $array[$pos1] = $array[$pos2];
        $array[$pos2] = $temp;

        // Mostrar el array final
        foreach ($array as $value) {
            echo $value . "\n";
        }
       
    }
}
