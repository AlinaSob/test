<?php
/**
 * Test
 * Author: Alina
 * Date: 27.05.2020
 * Time: 17:30
 */

namespace App;


use App\Interfaces\InterfaceConnector;
use App\Interfaces\InterfaceReader;

abstract class Connector implements InterfaceConnector
{
    var $source;
    
    /** @var  InterfaceReader */
    protected $reader;
    
    public function __construct(string $source, InterfaceReader $reader)
    {
        $this->source = $source;
        $this->reader = $reader;
    }
    
    abstract public function connect(): bool;
    
    abstract public function read(): array;
    
    public function getParsedResult($result){
        return $this->reader->read($result);
    }
}