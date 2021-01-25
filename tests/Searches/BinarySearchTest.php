<?php

namespace DataStructureTests\Searches;

use DataStructure\Searches\BinarySearch;
use Generator;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class BinarySearchTest extends TestCase
{
    public function provideListOfNumbersWithExistingNumberInTheList(): Generator
    {
        yield [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11], 3];
        yield [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11], 9];
        yield [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11], 6];
        yield [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11], 1];
        yield [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11], 11];
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
        $numberWasFound = (new BinarySearch())->exec($listOfNumbers, $numberToFind);

        Assert::assertTrue($numberWasFound);
    }

    public function provideListOfNumbersWithNumberNotInTheList(): Generator
    {
        yield [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11], 15];
        yield [[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11], 20];
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
        $numberWasFound = (new BinarySearch())->exec($listOfNumbers, $numberToFind);

        Assert::assertFalse($numberWasFound);
    }
}