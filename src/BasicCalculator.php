<?php

namespace Alvianrizky\Kalkulator;

class BasicCalculator
{
    public static function add(array $data)
    {
        return array_sum($data);
    }

    public static function multiply(array $data)
    {
        return array_product($data);
    }
}
