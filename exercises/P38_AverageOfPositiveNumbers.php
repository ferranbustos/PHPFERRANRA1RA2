<?php

class P38_AverageOfPositiveNumbers
{
    public function main(): void
    {
        $contador = 0;
        $suma = 0;

        do {
            echo "Give a number: ";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            // Convertimos a número
            $numero = (int)$input;

            if ($numero < 0) {
                // Ignoramos los negativos
                continue;
            }

            if ($numero === 0) {
                if ($contador === 0) {
                    echo "Cannot calculate the average\n";
                } else {
                    $media = $suma / $contador;
                    echo "Average of the numbers: " . $media . "\n";
                }
                break;
            }

            $suma += $numero;
            $contador++;

        } while (true);
    }
}
