<?php
declare (strict_types = 1);

namespace Test;

use PHPUnit\Framework\TestCase;

/**
 * use vendor/bin/phpunit --bootstrap vendor/autoload.php www/tests/NumberSquareTest.php
 */
final class NumberSquareTest extends TestCase
{
    public function testNumberSquare(): void
    {
        require(__DIR__ . '/../libs/fce.php');

        $this->assertEquals(4, numberSquare(2));
        $this->assertEquals(9, numberSquare(3));
        $this->assertEquals(16, numberSquare(4));
        $this->assertEquals(25, numberSquare(5));

        for ($i = -30; $i < 30; $i++) {
            $this->assertEquals(pow($i, 2), numberSquare($i));
        }
    }
}