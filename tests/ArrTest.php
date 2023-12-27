<?php

use PHPUnit\Framework\TestCase;
use Noeka\Support\Arr;

final class ArrTest extends TestCase
{
    protected array $array = [
        'one' => 'testOne',
        'two' => [
            'three' => 'testThree',
        ],
    ];

    public function testCanAccessFirstLevelOfArray(): void
    {
        $this->assertSame(Arr::get($this->array, 'one'), $this->array['one']);
    }

    public function testCanAccessSecondLevelOfArray(): void
    {
        $this->assertSame(Arr::get($this->array, 'two.three'), $this->array['two']['three']);
    }

    public function testCanReturnDefaultIfArrayAccessDoenstExist(): void
    {
        $this->assertSame(Arr::get($this->array, 'one.two', 'default'), 'default');
    }
}
