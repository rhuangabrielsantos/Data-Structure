<?php

namespace DataStructureTests\DataStructures;

use DataStructure\Championship;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class SplHeapTest extends TestCase
{
    public static function testSplHeapStructure(): void
    {
        $championship = new Championship();

        $championship->insert(['name' => 'Barcelona', 'score' => 15, 'victories' => 3]);
        $championship->insert(['name' => 'Real Madrid', 'score' => 22, 'victories' => 7]);

        Assert::assertEquals('Real Madrid', $championship->top()['name']);
    }

    public static function testSplHeapStructure_withTeamsWithTheSamePoints(): void
    {
        $championship = new Championship();

        $championship->insert(['name' => 'Barcelona', 'score' => 22, 'victories' => 3]);
        $championship->insert(['name' => 'Real Madrid', 'score' => 22, 'victories' => 7]);

        Assert::assertEquals('Real Madrid', $championship->top()['name']);
    }
}
