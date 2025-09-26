<?php

class P34_NumberOfNegativeNumbers
{
    public function main(): void
    {
         $contadorNegativos=0;
      do {
            echo "Give a number: ";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

   
            if ($input < 0) {
               echo "Number of negative numbers: " . $contadorNegativos++ . "\n"; 
               break;
            }

       
    
        } while (true);
    }}
