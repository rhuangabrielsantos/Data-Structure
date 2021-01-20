<?php

namespace DataStructureTests;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use SplMaxHeap;

class MaxHeapTest extends TestCase
{
    public static function testStructureMaxHeap(): void
    {
        $maxHeap = new SplMaxHeap();

        $maxHeap->insert(30);
        $maxHeap->insert(105);
        $maxHeap->insert(10);
        $maxHeap->insert(99);
        $maxHeap->insert(50);

        Assert::assertEquals(105, $maxHeap->top());
    }
}
