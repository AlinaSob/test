<?php
/**
 * Test
 * Author: Alina
 * Date: 27.05.2020
 * Time: 17:18
 */

namespace App;

use App\Interfaces\InterfaceReader;

class JsonReader implements InterfaceReader
{
    
    public function read($string) :array
    {
        $result = json_decode($string);
        if(!$result){
            $result = [];
        }
        return $result;
    }
}