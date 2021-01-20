<?php

namespace DataStructureTests;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use SplMinHeap;

class MinHeapTest extends TestCase
{
    public static function testStructureMinHeap(): void
    {
        $minHeap = new SplMinHeap();

        $minHeap->insert(30);
        $minHeap->insert(105);
        $minHeap->insert(10);
        $minHeap->insert(99);
        $minHeap->insert(50);

        Assert::assertEquals(10, $minHeap->top());
    }
}
