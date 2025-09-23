<?php

class P29_GiftTax
{
    public function main(): void
    {
        echo "Value of the gift? ";

        $gift = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        

        if  ($gift >= 5000 && $gift < 25000)  {
            $gift2=(100+($gift-5000)*0.08);


            echo "Tax: ".$gift2."\n";
        } 
        else if ($gift >= 25000 && $gift < 55000) {
           $gift2=(1700+($gift-25000)*0.10);


            echo "Tax: ".$gift2."\n";
        }

         else if ($gift >= 55000 && $gift < 200000) {
           $gift2=(4700+($gift-55000)*0.12);


            echo "Tax: ".$gift2."\n";
        }
        else if ($gift >= 200000 && $gift < 1000000) {
           $gift2=(22100+($gift-200000)*0.15);


            echo "Tax: ".$gift2."\n";
        }
        else if ($gift >= 1000000 ) {
           $gift2=(142100+($gift-1000000)*0.17);


            echo "Tax: ".$gift2."\n";
        }

        else{
            echo "No tax!";

        }
        
       
    }
}
