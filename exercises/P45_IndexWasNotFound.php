<?php

class P45_IndexWasNotFound
{
    public function main(): void
    {
        
        $numeros = [6, 2, 8, 1, 3, 0, 9, 7];

        
        echo "Search for? ";
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        
        $buscado = (int)$input;

      
        $indice = array_search($buscado, $numeros);

        
        if ($indice !== false) {
            echo "$buscado is at index $indice.";
        } else {
            echo "$buscado was not found.";
        }
    }
}
