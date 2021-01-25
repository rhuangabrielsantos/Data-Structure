<?php

namespace DataStructureTests\Searches;

use DataStructure\Searches\LinearSearch;
use Generator;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class LinearSearchTest extends TestCase
{
    public function provideListOfNumbersWithExistingNumberInTheList(): Generator
    {
        yield [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11], 3];
        yield [[6, 7, 4, 8, 1, 15, 5, 9, 2, 13, 3], 3];
    }

    /**
     * @test
     * @dataProvider provideListOfNumbersWithExistingNumberInTheList
     * @param array $listOfNumbers
     * @param int $numberToFind
     */
    public static function givenListOfNumbers_withExistingNumberInList_shouldFindNumber(
        array $listOfNumbers,
        int $numberToFind
    ): void
    {
        $numberWasFound = (new LinearSearch())->exec($listOfNumbers, $numberToFind);

        Assert::assertTrue($numberWasFound);
    }

    public function provideListOfNumbersWithNumberNotInTheList(): Generator
    {
        yield [[5, 7, 8, 1, 6, 7, 10, 15, 17, 66, 2], 3];
        yield [[8, 7, 9, 6, 7, 8, 7, 98, 15, 12, 51], 3];
    }

    /**
     * @test
     * @dataProvider provideListOfNumbersWithNumberNotInTheList
     * @param array $listOfNumbers
     * @param int $numberToFind
     */
    public static function givenListOfNumbers_withNumberNotInList_shouldNotFindNumber(
        array $listOfNumbers,
        int $numberToFind
    ): void
    {
        $numberWasFound = (new LinearSearch())->exec($listOfNumbers, $numberToFind);

        Assert::assertFalse($numberWasFound);
    }
}
