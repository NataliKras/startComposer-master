<?php
namespace App\Calc;
class Calc implements CalcInterface
{
    public function plus(float $a, float $b): float
    {
        return $a + $b;
    }
    public function minus(float $a, float $b): float
    {
        return $a - $b;
    }
    public function multiply(float $a, float $b): float
    {
        return $a * $b;
    }
    public function divide(float $a, float $b): float
    {
        return $a / $b;
    }
    public function pow(float $a, float $b): float
    {
        return $a ** $b;
    }
    public function integerDivision(float $a, float $b): int
    {
        return $a / $b;
    }
    public function hypot(float $a, float $b): float
    {
        return $a + $b;
    }
    public function area(float $a, float $b): float
    {
        return $a * $b;
    }
    public function perimeter(float $a, float $b): float
    {
        return ($a + $b)*2;
    }

}