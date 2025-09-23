<?php

class P20_Adulthood
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
               // Write your code here
        
        echo "How old are you? ";

         $edad = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        // Get input from the user

        // Check year value

        if ((int)$edad < 18) { 

            echo "You are not an adult"."\n";


        }
        else{
            echo"You are an adult"."\n";

        }
       
    }
}
