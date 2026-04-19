<?php
/**
 * Tests for CryptoHive
 */

use PHPUnit\Framework\TestCase;
use Cryptohive\Cryptohive;

class CryptohiveTest extends TestCase {
    private Cryptohive $instance;

    protected function setUp(): void {
        $this->instance = new Cryptohive(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptohive::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
