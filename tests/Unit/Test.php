<?php


use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test_example(): void
    {
        $number = 3;

        $this->assertEquals(3, $number);
    }
}
