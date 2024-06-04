<?php
namespace Tests;

use App\Kernel;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class KernelTest extends TestCase
{

    #[Test]
    public function returnsStatusCode(): void {
        // Arrange
        $kernel = new Kernel();
        // Act
        $code = $kernel->run();

        // Assert
        $this->assertIsNumeric($code);
    }

}
