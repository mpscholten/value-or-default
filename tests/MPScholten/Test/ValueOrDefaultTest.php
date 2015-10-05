<?php

namespace MPScholten\Test;

class ValueOrDefaultTest extends \PHPUnit_Framework_TestCase
{
    public function testArray()
    {
        $array = [
            'a' => 'a',
        ];

        $this->assertEquals('a', \MPScholten\valueOrDefault($array['a'], null));
        $this->assertEquals(null, \MPScholten\valueOrDefault($array['b'], null));
    }

    public function testNull()
    {
        $someValueOrNull = null;
        $this->assertEquals('Default value', \MPScholten\valueOrDefault($someValueOrNull, 'Default value'));
    }
}
