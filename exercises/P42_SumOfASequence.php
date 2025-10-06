<?php

class P42_SumOfASequence
{
    public function main(): void
     { $contador = 0;
          $suma = 0;
  
            echo "Last number?: ";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
           
           for ($i = 0; $i <= $input; $i++) {
            $suma += $i;
                
    }   


    echo "The sum is ".$suma."\n";
            

            

            
    }
       
    }
