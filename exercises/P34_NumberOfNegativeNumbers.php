<?php

class P34_NumberOfNegativeNumbers
{
    public function main(): void
    {
         $count=0;
      do {
            echo "Give a number: ";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

              if ($input !== '0') {
                if ((int)$input < 0) {
                    $count++;
                }
            }
            
        } while ($input !== '0');
        
        echo "Number of negative numbers: $count\n";
    }
}