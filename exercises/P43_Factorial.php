<?php

class P43_Factorial
{
    public function main(): void
    {
        $factorial = 1;

        echo "Give a number?: ";
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        for ($i = 1; $i <= (int)$input; $i++) {
            $factorial *= $i;
        }

        // Cambiado para que coincida con el test
        echo "Factorial: " . $factorial . "\n";
    }
}