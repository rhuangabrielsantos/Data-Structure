<?php

namespace DataStructureTests\DataStructures;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use SplStack;

class StackStructureTest extends TestCase
{
    public static function testStackStructure(): void
    {
        $stack = new SplStack();

        $stack->push('orange');
        $stack->push('apple');

        Assert::assertEquals('apple', $stack[0]);
        Assert::assertEquals('orange', $stack[1]);
    }
}
