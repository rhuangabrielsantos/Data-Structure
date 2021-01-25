<?php

namespace DataStructureTests\DataStructures;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use SplFixedArray;

class FixedArrayTest extends TestCase
{
    public static function testStructure(): void
    {
        $fixedArray = new SplFixedArray($size = 2);

        $fixedArray[0] = "orange";
        $fixedArray[1] = "apple";

        Assert::assertEquals('orange', $fixedArray[0]);
        Assert::assertEquals('apple', $fixedArray[1]);
    }
}
