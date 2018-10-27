<?php

namespace App;

use App\Contracts\ModContract;

class CheckMod5 implements ModContract
{
    const TEXT = 'IT';

    public static function check(int $number): bool
    {
        return $number % 5 == 0;
    }
}