<?php

namespace DataStructure\Ordinations;

class QuickSort
{
    public static function exec(array $array): array
    {
        $loe = [];
        $gt = [];

        if (count($array) < 2) {
            return $array;
        }

        $pivotKey = key($array);
        $pivot = array_shift($array);

        foreach ($array as $val) {
            if ($val <= $pivot) {
                $loe[] = $val;
            } elseif ($val > $pivot) {
                $gt[] = $val;
            }
        }

        return array_merge(QuickSort::exec($loe), [$pivotKey => $pivot], QuickSort::exec($gt));
    }
}
