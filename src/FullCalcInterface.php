<?php

namespace App;

interface FullCalc
{
    public function plus(float $a, float $b) : float;

    public function minus(float $a, float $b) : float;

    public function multiply(float $a, float $b) : float;

    public function divide(float $a, float $b) : float;

    public function logarithm(float $a, float $b) : float;

    //степень числа
    public function pow(float $a, float $b) : float;

    // целочисленное деление
    public function integerDivision(float $a, float $b) : int;

    public function hypot(float $a, float $b) : float;

    // площадь прямоугольника
    public function area(float $a, float $b) : float;

    // периметр прямоугольника
    public function perimeter(float $a, float $b) : float;

}
// https://www.php.net/manual/ru/ref.math.php - все выбирал из стандартных функций))) 
// две последних не из стандартный, но по сути та же схема с 2-мя входными числами