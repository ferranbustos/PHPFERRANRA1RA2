<?php

class P40_CountingToHundred
{
    
       public function main(): void
    { $contador = 0;
          $suma = 0;
  
            echo "Give a number: ";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

           for ($i = $input; $i <= 100; $i++) {
                echo $i . "\n";
    }   
            

            

            
    }
       
    }
