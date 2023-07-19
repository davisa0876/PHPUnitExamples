<?php
require __DIR__ . '/../vendor/autoload.php'; // Adjust this path as necessary
use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase {
    public function testAddReturns() {
        require 'function.php';
        $this->assertEquals(4, add(2,2));
        $this->assertEquals(4, add(3,2));
        $this->assertEquals(4, add(3,1));
    }
}
