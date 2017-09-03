<?php

namespace WebTechNick\LaravelMacros\Test;

use Illuminate\Support\Collection;
use WebTechNick\LaravelMacros\Test\TestCase;

class NoPreserveReverseTest extends TestCase
{
    /** @test */
    public function it_should_not_preserve_keys_on_reverse()
    {
        $col = new Collection([
            'foo',
            'bar',
            'baz'
        ]);

        $expected = ['baz', 'bar', 'foo'];

        $this->assertEquals($col->noPreserveReverse(), $expected);
    }
}