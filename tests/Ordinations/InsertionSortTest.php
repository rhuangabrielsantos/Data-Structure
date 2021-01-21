<?php

namespace DataStructureTests\Ordinations;

use DataStructure\Ordinations\InsertionSort;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class InsertionSortTest extends TestCase
{
    public function provideDisorderedArrays(): \Generator
    {
        //     Disordered Array                               Ordered Array
        yield [[3, 5, 1, 10, 8],                             [1, 3, 5, 8, 10]];
        yield [[5, 7, 9, 15, 2],                             [2, 5, 7, 9, 15]];
        yield [[6, 7, 8, 9, 10],                             [6, 7, 8, 9, 10]];
        yield [[8, 34, 84, 849, 49, 47, 24, 15, 61, 54, 65], [8, 15, 24, 34, 47, 49, 54, 61, 65, 84, 849]];
        yield [[2, 1, 1, 2, 1],                              [1, 1, 1, 2, 2]];
        yield [[7, 6, 5, 4, 3, 2, 1],                        [1, 2, 3, 4, 5, 6, 7]];
    }

    /**
     * @dataProvider provideDisorderedArrays
     * @param array $disorderedArray
     * @param array $orderedArray
     */
    public static function testOrdinationInsertionSort_withDisorderedArrays_shouldOrderTheArrays(
        array $disorderedArray,
        array $orderedArray
    ): void
    {
        $orderedArrayByBubbleSort = InsertionSort::exec($disorderedArray);

        $messageError = 'The ordering is wrong';
        Assert::assertEquals($orderedArray, $orderedArrayByBubbleSort, $messageError);
    }
}
