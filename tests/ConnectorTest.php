<?php
/**
 * Test
 * Author: Alina
 * Date: 27.05.2020
 * Time: 18:37
 */
namespace Tests;

use PHPUnit\Framework\TestCase;


class ConnectorTest extends TestCase
{
    public function testConnection(){
        $connector = new \App\FileConnector("test.txt", new \App\JsonReader());
        
        $this->assertTrue($connector->connect());
    }
    
    public function testConnectionFalse(){
        $connector = new \App\FileConnector("test1.txt", new \App\JsonReader());
        
        $this->assertFalse($connector->connect());
    }
    
    public function testConnectionUrl(){
        $connector = new \App\UrlConnector("https://ya.ru/robots.txt", new \App\JsonReader());
        
        $this->assertTrue($connector->connect());
    }
    
    public function testConnectionUrlFalse(){
        $connector = new \App\UrlConnector("https://ya.ru/t.txt", new \App\JsonReader());
        
        $this->assertFalse($connector->connect());
    }
}