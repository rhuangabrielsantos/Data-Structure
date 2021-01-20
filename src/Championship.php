<?php

namespace DataStructure;

use SplHeap;

class Championship extends SplHeap
{
    protected function compare($value1, $value2): int
    {
        if($value1['score'] === $value2['score']) {
            return $value1['victories'] <=> $value2['victories'];
        }

        return $value1['score'] <=> $value2['score'];
    }
}
