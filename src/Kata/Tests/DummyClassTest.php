<?php


namespace Kata\Tests;

use Kata\DummyClass;

/**
 * Class DummyClassTest
 * @package Kata\Tests
 */
class DummyClassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itShouldReturnAHelloWorldString()
    {
        $hello = "hello world";

        $this->assertSame($hello, (new DummyClass())->helloWorld());
    }
}