<?php

class P41_FromWhereToWhere
{
    public function main(): void
    {
        echo "Where to?: ";
        $to = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        echo "Where from?: ";
        $from = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($from > $to) {
            echo "Invalid range\n";
            return;
        }

        for ($i = $from; $i <= $to; $i++) {
            echo $i . "\n";
        }
    }
}
