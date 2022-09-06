<?php

declare(strict_types=1);

namespace Tests;

use App\Main;
use PHPUnit\Framework\TestCase;

/**
 * Class MainTest
 *
 * @since   2022-09-06
 * @package Tests
 */
class MainTest extends TestCase
{

    public function testMain() {
        Main::run();
    }

}