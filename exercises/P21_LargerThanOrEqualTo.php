<?php

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
   
        echo "Give the first number: ";

       $numero1 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

       echo "Give the second number: ";

       $numero2 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

       if ($numero1 < $numero2) {

        echo "Greater number is: ".$numero2."\n";
       }

       else if ($numero1 > $numero2){
        echo "Greater number is: ".$numero1."\n";
       }
       else{
         echo "The numbers are equal!"."\n";
       }

    
        
    
        
     
       
        
    }
}
