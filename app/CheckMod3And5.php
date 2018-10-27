<?php

namespace App;

use App\Contracts\ModContract;

class CheckMod3And5 implements ModContract
{
    const TEXT = 'Linianos';

    public static function check(int $number): bool
    {
        return ($number % 5 == 0) and ($number % 3 == 0);
    }
}