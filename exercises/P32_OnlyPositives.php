<?php

class P32_OnlyPositives
{
    public function main(): void
    {
        
       
     {
        do {
            echo "Give a number: ";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($input == 0) {
                break;
            } elseif ($input < 0) {
                echo "Unsuitable number\n";
            } else {
                $cuadrado = $input * $input;
                echo $cuadrado . "\n";
            }

        } while (true);
    }
}
}