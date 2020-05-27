<?php
/**
 * Test
 * Author: Alina
 * Date: 27.05.2020
 * Time: 19:57
 */

namespace Tests;


use App\JsonReader;
use PHPUnit\Framework\TestCase;

class ReaderTest extends TestCase
{
    function testReadEmpty(){
        $string = "";
        $reader = new JsonReader();
        $this->assertIsArray($reader->read($string));
    }
    
    function testReadTrue(){
        $string = "[{}]";
        $reader = new JsonReader();
        $this->assertIsArray($reader->read($string));
    }
}