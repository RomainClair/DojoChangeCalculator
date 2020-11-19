<?php

/**
 * A simple cash machine simulator
 */

declare(strict_types=1);

class CashMachine
{
    public const BILLS = [500, 200, 100, 50, 20, 10, 5, 2, 1];
    public static function getChange(int $amount): array
    {
        $result = [];
        foreach(self::BILLS as $bill) {
            $number = intdiv($amount,$bill);
            if ($number > 0) {
                $result[$bill] = $number;
            }
            $amount %= $bill;
        }
        return $result;
    }
}