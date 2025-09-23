<?php

class P23_AbsoluteValue
{
    public function main(): void
    {
      
       

        $num = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($num<0){
            $num = $num * -1;
            echo $num."\n";   
            }
        else {
            echo $num."\n";
             
        }



       
    }
}
