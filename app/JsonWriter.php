<?php
/**
 * Test
 * Author: Alina
 * Date: 27.05.2020
 * Time: 15:58
 */

namespace App;

use App\Interfaces\InterfaceWriter;

class JsonWriter implements InterfaceWriter
{
    
    public function write(array $strings) :string
    {
        return json_encode($strings);
    }
}