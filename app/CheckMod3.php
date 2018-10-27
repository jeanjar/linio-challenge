<?php

namespace App;

use App\Contracts\ModContract;

class CheckMod3 implements ModContract
{
    const TEXT = 'Linio';

    public static function check(int $number): bool
    {
        return $number % 3 == 0;
    }
}