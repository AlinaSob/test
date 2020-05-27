<?php
/**
 * Test
 * Author: Alina
 * Date: 27.05.2020
 * Time: 16:35
 */

namespace App;


class FileConnector extends Connector
{
    
    public function connect() : bool
    {
        return file_exists($this->source);
    }
    
    public function read() : array
    {
        $result = include_once ($this->source);
        return parent::getParsedResult($result);
    }
}