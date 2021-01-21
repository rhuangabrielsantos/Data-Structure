<?php

namespace DataStructure\Ordinations;

use JetBrains\PhpStorm\Pure;

class BubbleSort
{
    #[Pure] public static function exec(array $disorderedArray): array
    {
        for ($i = 0; $i < count($disorderedArray); $i++) {
            for ($j = 0; $j < count($disorderedArray) - 1; $j++) {
                if ($disorderedArray[$j] > $disorderedArray[$j + 1]) {
                    $aux = $disorderedArray[$j];
                    $disorderedArray[$j] = $disorderedArray[$j + 1];
                    $disorderedArray[$j + 1] = $aux;
                }
            }
        }

        return $disorderedArray;
    }
}
