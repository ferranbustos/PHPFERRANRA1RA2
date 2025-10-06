<?php

class P35_SumOfNumbers
{
    public function main(): void
    {
         $suma=0;
      do {
            echo "Give a number: ";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

   
           if ($input == 0) {
                
                break;
            }

            $suma += $input;

       
    
        } while (true);
        echo "Sum of the numbers: $suma\n";
    }
    
}

