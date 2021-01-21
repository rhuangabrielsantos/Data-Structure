<?php

namespace DataStructure\Ordinations;

class MergeSort
{
    public function mergeSort(array $array): array
    {
        if (count($array) == 1) {
            return $array;
        }

        $mid = count($array) / 2;
        $left = array_slice($array, 0, $mid);
        $right = array_slice($array, $mid);
        $left = $this->mergeSort($left);
        $right = $this->mergeSort($right);

        return $this->merge($left, $right);
    }

    private function merge(array $left, array $right): array
    {
        $res = [];

        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] > $right[0]) {
                $res[] = $right[0];
                $right = array_slice($right, 1);
            } else {
                $res[] = $left[0];
                $left = array_slice($left, 1);
            }
        }

        while (count($left) > 0) {
            $res[] = $left[0];
            $left = array_slice($left, 1);
        }

        while (count($right) > 0) {
            $res[] = $right[0];
            $right = array_slice($right, 1);
        }

        return $res;
    }
}