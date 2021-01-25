<?php

namespace DataStructure\Searches;

class BinarySearch
{
    public function exec(array $list, int $item): bool
    {
        while (is_array($list)) {
            $ini = 0;
            $mid = floor(count($list) / 2);
            $end = count($list) - 1;

            if ($list[$mid] < $item) {
                $tmp = [];

                for ($i = $mid; $i <= $end; $i++) {
                    $tmp[] = $list[$i];
                }

                $list = $tmp;
            } elseif ($list[$mid] > $item) {
                $tmp = [];

                for ($i = $ini; $i < $mid; $i++) {
                    $tmp[] = $list[$i];
                }

                $list = $tmp;
            } else {
                $list = true;
            }

            if ($ini == $end && is_array($list)) $list = false;
        }

        return $list;
    }
}
