<?php

class P36_NumberAndSumOfNumbers
{
    public function main(): void
 {

        $contador=0;
        $suma = 0;
      do {
            echo "Give a number: ";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($input == 0) {
                
                break;
            }

            if ($input == 0) {
                
                break;
            }

            $suma += $input;

            $contador++;
           

        } while (true);
        echo "Number of numbers: $contador\n";
        echo "Sum of the numbers: $suma\n";
    }
}
