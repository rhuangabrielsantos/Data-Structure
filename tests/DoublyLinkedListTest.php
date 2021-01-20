<?php

namespace DataStructureTests;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use SplDoublyLinkedList;

class DoublyLinkedListTest extends TestCase
{
    public static function testDoublyLinkedListStructure_withFIFO(): void
    {
        $fifoStructure = new SplDoublyLinkedList();
        $fifoStructure->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);

        $fifoStructure->push('orange');
        $fifoStructure->push('apple');

        Assert::assertEquals('orange', $fifoStructure[0]);
        Assert::assertEquals('apple', $fifoStructure[1]);
    }

    public static function testDoublyLinkedListStructure_withLIFO(): void
    {
        $lifoStructure = new SplDoublyLinkedList();
        $lifoStructure->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);

        $lifoStructure->push('orange');
        $lifoStructure->push('apple');

        Assert::assertEquals('apple', $lifoStructure[0]);
        Assert::assertEquals('orange', $lifoStructure[1]);
    }
}
