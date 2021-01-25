<?php

namespace DataStructureTests\DataStructures;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use SplPriorityQueue;

class PriorityQueueTest extends TestCase
{
    public static function testStructureMaxHeap(): void
    {
        $splPriorityQueue = new SplPriorityQueue();

        $splPriorityQueue->insert('A', 1);
        $splPriorityQueue->insert('B', 3);
        $splPriorityQueue->insert('C', 2);

        Assert::assertEquals('B', $splPriorityQueue->top());
    }
}
