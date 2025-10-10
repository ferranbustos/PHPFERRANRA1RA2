<?php

class P46_SumOfArray
{
    public function main(): void
    {
        $array = [5, 1, 9, 4, 2];
        echo $this->sumOfNumbersInArray($array) . "\n";
    }

    public function sumOfNumbersInArray(array $array): int {    
        if (empty($array)) {
            return 0;
        }
        $suma = 0;

        foreach ($array as $numero) {
            $suma += $numero;
        }

        return $suma;
    }
}
