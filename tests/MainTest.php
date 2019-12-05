<?php

declare(strict_types=1);

namespace Test;

use App\Main;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    private Main $main;

    protected function setUp(): void
    {
        $this->main = new Main();
    }

    public function test_if_counts(): void
    {
        $this->main->increment();
        $this->main->increment();
        $this->main->increment();

        $this->assertEquals(3, $this->main->getCount());
    }
}
