<?php

namespace DataStructure\Searches;

use JetBrains\PhpStorm\Pure;

class LinearSearch
{
    #[Pure] public function exec(array $list, int $item): bool
    {
        $position = 0;

        while($position < count($list)) {
            if ($item === $list[$position]) {
                return true;
            }

            $position++;
        }

        return false;
    }
}
