<?php

class P33_NumberOfNumbers
{
    public function main(): void
    {

        $contador=0;
      do {
            echo "Give a number: ";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($input == 0) {
                echo "Number of numbers: " . $contador . "\n";
                break;
            }

            $contador++;
            echo $contador;

        } while (true);
    }
}
