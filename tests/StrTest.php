<?php

use PHPUnit\Framework\TestCase;
use Noeka\Support\Str;

final class StrTest extends TestCase
{
    public function testCanUppercaseText(): void
    {
        $this->assertSame(Str::upper('thIs Is mY tESt'), 'THIS IS MY TEST');
    }

    public function testCanLowercaseText(): void
    {
        $this->assertSame(Str::lower('thIs Is mY tESt'), 'this is my test');
    }
}
