<?php


class Calculatrice
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function sub(int $a, $b): int
    {
        return $a - $b;
    }

    public function mul(int $a, int $b): int
    {
        return $a * $b;
    }

    public function div(int $a, int $b): int
    {
        return $a / $b;
    }
}