<?php

namespace App\Contracts;

/**
 * @property int $number
 */
interface ModContract
{
    public static function check(int $number): bool;
}