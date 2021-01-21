<?php

namespace DataStructure\Ordinations;

use JetBrains\PhpStorm\Pure;

class InsertionSort
{
    #[Pure] public static function exec(array $disorderedArray): array
    {
        for ($i = 1; $i < count($disorderedArray); $i++) {

            $j = $i;

            while ($j > 0 && $disorderedArray[$j] < $disorderedArray[$j - 1]) {
                $aux = $disorderedArray[$j];
                $disorderedArray[$j] = $disorderedArray[$j - 1];
                $disorderedArray[$j - 1] = $aux;
                $j -= 1;
            }
        }

        return $disorderedArray;
    }
}
