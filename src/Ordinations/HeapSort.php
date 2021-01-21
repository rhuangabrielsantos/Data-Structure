<?php

namespace DataStructure\Ordinations;

class HeapSort
{
    public function exec(array &$array, int $n): array
    {
        for ($counter = ($n / 2); $counter >= 0; $counter--) {
            $this->heapify($array, $n - 1, $counter);
        }

        for ($counter = $n - 1; $counter >= 0; $counter--) {
            $temp = $array[$counter];
            $array[$counter] = $array[0];
            $array[0] = $temp;

            $this->heapify($array, $counter - 1, 0);
        }

        return $array;
    }

    private function heapify(array &$Array, int $n, int $i): void
    {
        $max = $i;
        $left = 2 * $i + 1;
        $right = 2 * $i + 2;

        if ($left <= $n && $Array[$left] > $Array[$max]) {
            $max = $left;
        }

        if ($right <= $n && $Array[$right] > $Array[$max]) {
            $max = $right;
        }

        if ($max != $i) {
            $temp = $Array[$i];
            $Array[$i] = $Array[$max];
            $Array[$max] = $temp;
            $this->heapify($Array, $n, $max);
        }
    }
}