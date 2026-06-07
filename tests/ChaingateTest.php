<?php
/**
 * Tests for ChainGate
 */

use PHPUnit\Framework\TestCase;
use Chaingate\Chaingate;

class ChaingateTest extends TestCase {
    private Chaingate $instance;

    protected function setUp(): void {
        $this->instance = new Chaingate(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chaingate::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
