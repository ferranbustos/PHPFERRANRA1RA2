<?php

class P22_GradesAndPoints
{
    public function main(): void
    {
        // Write your code here


        echo "Give points[0-100]: ";

        $point = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

         if ($point < 0) {
            echo "Grade: impossible!\n";
        } elseif ($point <= 49) {
            echo "Grade: failed\n";
        } elseif ($point <= 59) {
            echo "Grade: 1\n";
        } elseif ($point <= 69) {
            echo "Grade: 2\n";
        } elseif ($point <= 79) {
            echo "Grade: 3\n";
        } elseif ($point <= 89) {
            echo "Grade: 4\n";
        } elseif ($point <= 100) {
            echo "Grade: 5\n";
        } else {
            echo "Grade: incredible!\n";
        }
        
        

        
    }
}
