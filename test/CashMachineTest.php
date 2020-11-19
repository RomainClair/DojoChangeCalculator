<?php 

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../src/CashMachine.php";

final class CashMachineTest extends TestCase
{
    public function testGetChange(): void
    {
        // Amout = 0
        $this->assertSame([], CashMachine::getChange(0));
        // One of each
        $this->assertSame([500 => 1], CashMachine::getChange(500));
        $this->assertSame([200 => 1], CashMachine::getChange(200));
        $this->assertSame([100 => 1], CashMachine::getChange(100));
        $this->assertSame([50 => 1], CashMachine::getChange(50));
        $this->assertSame([20 => 1], CashMachine::getChange(20));
        $this->assertSame([10 => 1], CashMachine::getChange(10));
        $this->assertSame([5 => 1], CashMachine::getChange(5));
        $this->assertSame([2 => 1], CashMachine::getChange(2));
        $this->assertSame([1 => 1], CashMachine::getChange(1));
        $this->assertSame([500 => 1, 200 => 1, 100 => 1,
                           50 => 1, 20 => 1, 10 => 1,
                           5 => 1, 2 => 1, 1 => 1], CashMachine::getChange(888));
        // Some arbitraty amount
        $this->assertSame([500 => 1, 200 => 1, 100 => 1], CashMachine::getChange(800));
        $this->assertSame([200 => 2, 2 => 2], CashMachine::getChange(404));
        $this->assertSame([500 => 37, 20 => 1, 10 => 1, 5 => 1, 2 => 1], CashMachine::getChange(18537));
        $this->assertSame([5 => 1, 2 => 2], CashMachine::getChange(9));
        $this->assertSame([50 => 1, 20 => 1, 10 => 1], CashMachine::getChange(80));
        // Negative values
        $this->assertSame([], CashMachine::getChange(-1));
        $this->assertSame([], CashMachine::getChange(-123));
        
        

    }
}