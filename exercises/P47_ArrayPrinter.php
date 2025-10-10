<?php

class P47_ArrayPrinter
{
    public function main(): void
    {
        $array = [5, 1, 3, 4, 2];
        $this->printNeatly($array);
    }

    public function printNeatly(array $array): void
    {
        
        if (!empty($array)) {
            echo implode(", ", $array) . "\n";
        }  else {
           
            echo "\n";
        }
        
    }
}
