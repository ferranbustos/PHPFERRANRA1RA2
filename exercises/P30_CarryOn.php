<?php

class P30_CarryOn
{
    public function main(): void
    {

        do {
            echo "Carry on?";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if($input==="no"){
                break;

            }
            
        } while (true);

        
       
    }
}
