<?php
require __DIR__ . '/../vendor/autoload.php'; // Adjust this path as necessary
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {
    public function testAddingTwoPlusTwo() {
        $this->assertEquals(4, 2 + 2);
    }
}
