<?php

class P37_AverageOfNumbers
{
    public function main(): void
    {
        $contador = 0;
        $suma = 0;
        
        do {
            echo "Give a number: ";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($input === '0') {
                break;
            }

            $suma += (float)$input;
            $contador++;

        } while (true);

   
        if ($contador > 0) {
            $media = $suma / $contador;
        } else {
            $media = 0;
        }

        echo "Average of the numbers: " . $media . "\n";
    }
}