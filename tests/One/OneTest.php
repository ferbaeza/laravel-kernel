<?php

namespace Tests\One;

use Baezeta\Test\KernelTestCase;

class OneTest extends KernelTestCase
{
    public function testOne(): void
    {
        $fun = ("Hello, Mundo!");
        $this->assertEquals("Hello, Mundo!", $fun);
    }
}
