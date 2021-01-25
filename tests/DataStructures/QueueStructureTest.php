<?php

namespace DataStructureTests\DataStructures;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use SplQueue;

class QueueStructureTest extends TestCase
{
    public static function testQueueStructure(): void
    {
        $stack = new SplQueue();

        $stack->push('orange');
        $stack->push('apple');

        Assert::assertEquals('orange', $stack[0]);
        Assert::assertEquals('apple', $stack[1]);
    }
}
