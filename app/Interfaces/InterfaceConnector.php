<?php
/**
 * Test
 * Author: Alina
 * Date: 27.05.2020
 * Time: 16:09
 */

namespace App\Interfaces;


interface InterfaceConnector
{
    public function __construct(string $source, InterfaceReader $reader);
    
    public function connect() : bool;
    
    public function read() : array;
}