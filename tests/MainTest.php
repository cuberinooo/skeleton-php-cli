<?php

declare(strict_types=1);

namespace Tests;
use PHPUnit\Framework\TestCase;

use App\Main;

class MainTest extends TestCase
{
    public function testMain()
    {
        Main::run();
        self::assertTrue(true);
    }

}