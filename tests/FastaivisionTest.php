<?php
/**
 * Tests for FastaiVision
 */

use PHPUnit\Framework\TestCase;
use Fastaivision\Fastaivision;

class FastaivisionTest extends TestCase {
    private Fastaivision $instance;

    protected function setUp(): void {
        $this->instance = new Fastaivision(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Fastaivision::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
