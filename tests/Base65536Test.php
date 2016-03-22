<?php

namespace Hevertonfreitas\Base65536;

use PHPUnit_Framework_TestCase;

class Base65536Test extends PHPUnit_Framework_TestCase
{

    private $strings = array(
        'test',
        'php',
        'base65536',
        'lorem ipsum dolor sit amet'
    );

    public function testEncode()
    {
        $this->assertEquals('驨ꍬ啯𒁷ꍲᕤ', Base65536::encode('hello world'));
    }

    public function testDecode()
    {
        $this->assertEquals('hello world', Base65536::decode('驨ꍬ啯𒁷ꍲᕤ'));
    }

    public function testEncodeAndDecode()
    {
        $encodedStrings = [];
        foreach ($this->strings as $string) {
            $encodedStrings[$string] = Base65536::encode($string);
        }

        foreach ($encodedStrings as $originalString => $encodedString) {
            $this->assertEquals($originalString, Base65536::decode($encodedString));
        }
    }
}