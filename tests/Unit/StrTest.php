<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Narration\ScalarObjects\Str;

final class StrTest extends TestCase
{
    public function testValue(): void
    {
        $str = new Str('foo');

        static::assertEquals($str->value(), 'foo');
    }
}

