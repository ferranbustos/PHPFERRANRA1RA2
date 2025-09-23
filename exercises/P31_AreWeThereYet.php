<?php

class P31_AreWeThereYet
{
    public function main(): void
    {
         do {
            echo "Give a number: ";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if($input==4){
                break;

            }
            
        } while (true);
       
    }
}
