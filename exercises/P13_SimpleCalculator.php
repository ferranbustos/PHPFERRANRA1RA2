<?php

class P13_SimpleCalculator {
    public function main(): void {
        // Define two numbers
        $numA = 8;
        $numB = 2;

        // Perform and output the calculations
        // Write the program here

        $suma = $numA + $numB;
        $resta = $numA - $numB;
        $multi = $numA * $numB;
        $division = $numA / $numB;

        echo $numA . " + ". $numB ." = ". $suma. "\n";
        echo $numA . " - ". $numB ." = ". $resta. "\n";
        echo $numA . " * ". $numB ." = ". $multi. "\n";
        echo $numA . " / " . $numB . " = " . number_format($division, 1) . "\n";




        
       
       
    }
}
