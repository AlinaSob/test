<?php
/**
 * Test
 * Author: Alina
 * Date: 27.05.2020
 * Time: 16:03
 */

namespace App;


use App\Interfaces\InterfaceConnector;
use App\Interfaces\InterfaceWriter;
use Exception;

class Controller
{
    /** @var  InterfaceConnector */
    protected $connector;
    /** @var  InterfaceWriter */
    protected $writer;
    
    protected $results;
    
    public function setConnector(InterfaceConnector $connector)
    {
        $this->connector = $connector;
    }
    
    public function setWriter(InterfaceWriter $writer)
    {
        $this->writer = $writer;
    }
    
    
    public function process() :string
    {
        if (!$this->connector->connect()) {
            throw new Exception("Can't connect to the source");
        }
        $results = $this->connector->read();
        $results = $this->sort($results);
        return $this->writeResult($results);
    }
    
    public function sort(array $results): array
    {
        if (empty($results)) {
            return [];
        }
        $this->checkInput($results);
        
        usort($results, function ($a, $b) {
            if ($a->scores > $b->scores) {
                return -1;
            } elseif ($a->scores == $b->scores) {
                return 0;
            } else {
                return 1;
            }
        });
        $counter = 1;
        $place = 1;
        $prev_scores = false;
        foreach ($results as $k => $result) {
            if(!$prev_scores || $prev_scores == $result->scores){
                $rank = $place;
            } else {
                $rank = $place = $counter;
            }
            $prev_scores = $result->scores;
            $results[$k]->rank = $rank;
            $counter++;
        }
        return $results;
    }
    
    /**
     * @param array $results
     * @throws Exception
     */
    private function checkInput(array $results): void
    {
        foreach ($results as $result) {
            if (!isset($result->team) || !isset($result->scores) || !is_int($result->scores) || $result->scores < 0) {
                throw new Exception("Wrong input format");
            }
        }
    }
    
    private function writeResult(array $results)
    {
        return $this->writer->write($results);
    }
}