<?php

namespace Tests\Unit;

use App\{CheckMod3, CheckMod5, CheckMod3And5};
use PHPUnit\Framework\TestCase;

class Tests extends TestCase
{
    public function testMod3()
    {
        $this->assertEquals(true, CheckMod3::check(15));
    }

    public function testNotMod3()
    {
        $this->assertEquals(false, CheckMod3::check(14));
    }

    public function testMod5()
    {
        $this->assertEquals(true, CheckMod5::check(15));
    }

    public function testNotMod5()
    {
        $this->assertEquals(false, CheckMod5::check(14));
    }

    public function testMod3And5()
    {
        $this->assertEquals(true, CheckMod3And5::check(15));
    }

    public function testNotMod3And5()
    {
        $this->assertEquals(false, CheckMod3And5::check(14));
    }



}