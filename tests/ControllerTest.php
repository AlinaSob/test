<?php
/**
 * Test
 * Author: Alina
 * Date: 27.05.2020
 * Time: 20:13
 */

namespace Tests;


use App\Controller;
use PHPUnit\Framework\TestCase;

class ControllerTest extends TestCase
{
    
    public function testEmpty(){
        $controller = new Controller();
        $input = [];
        $this->assertEmpty($controller->sort($input));
    }
    
    public function testSortOne()
    {
        $controller = new Controller();
        $input = [
          (object)['team' => "Rem", "scores" => 99]
        ];
        
        $results = [
          (object)['team' => "Rem", "scores" => 99, 'rank' => 1]
        ];
        
        $this->assertEquals($results, $controller->sort($input));
        
    }
    
    public function testSortMany()
    {
        
        $input = [
          (object)["team" => "Axiom", "scores" => 88],
          (object)["team" => "BnL", "scores" => 65],
          (object)["team" => "Eva", "scores" => 99],
          (object)["team" => "WALL-E", "scores" => 99]
        ];
        $controller = new Controller();
        $results = [
          (object)["rank" => 1, "team" => "Eva", "scores" => 99],
          (object)["rank" => 1, "team" => "WALL-E", "scores" => 99],
          (object)["rank" => 3, "team" => "Axiom", "scores" => 88],
          (object)["rank" => 4, "team" => "BnL", "scores" => 65]
        ];
        $this->assertEquals($results, $controller->sort($input));
    }
    
    
    public function testSortOther()
    {
        
        $input = [
          (object)["team" => "Axiom", "scores" => 88],
          (object)["team" => "BnL", "scores" => 0],
          (object)["team" => "Eva", "scores" => 99],
          (object)["team" => "WALL-E", "scores" => 61]
        ];
        $controller = new Controller();
        $results = [
          (object)["rank" => 1, "team" => "Eva", "scores" => 99],
          (object)["rank" => 2, "team" => "Axiom", "scores" => 88],
          (object)["rank" => 3, "team" => "WALL-E", "scores" => 61],
          (object)["rank" => 4, "team" => "BnL", "scores" => 0]
        ];
        $this->assertEquals($results, $controller->sort($input));
    }
    
    public function testSortAnother()
    {
        
        $input = [
          (object)["team" => "Axiom", "scores" => 88],
          (object)["team" => "BnL", "scores" => 0],
          (object)["team" => "Brown", "scores" => 11],
          (object)["team" => "Big", "scores" => 23],
          (object)["team" => "Bear", "scores" => 88],
          (object)["team" => "Eva", "scores" => 99],
          (object)["team" => "WALL-E", "scores" => 61]
        ];
        $controller = new Controller();
        $results = [
          (object)["rank" => 1, "team" => "Eva", "scores" => 99],
          (object)["rank" => 2, "team" => "Axiom", "scores" => 88],
          (object)["rank" => 2, "team" => "Bear", "scores" => 88],
          (object)["rank" => 4, "team" => "WALL-E", "scores" => 61],
          (object)["rank" => 5, "team" => "Big", "scores" => 23],
          (object)["rank" => 6, "team" => "Brown", "scores" => 11],
          (object)["rank" => 7, "team" => "BnL", "scores" => 0]
        ];
        $this->assertEquals($results, $controller->sort($input));
    }
}