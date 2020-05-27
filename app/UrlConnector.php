<?php
/**
 * Test
 * Author: Alina
 * Date: 27.05.2020
 * Time: 15:58
 */

namespace App;

class UrlConnector extends Connector
{
    
    public function connect(): bool
    {
        $headers = get_headers($this->source);
        if (!$headers || !isset($headers[0])) {
            return false;
        }
        return substr_count($headers[0], "200 OK") != 0;
    }
    
    public function read(): array
    {
        $result = file_get_contents($this->source);
        
        return parent::getParsedResult($result);
    }
}