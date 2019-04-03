<?php

namespace App;

class Sensors {

    private $data;
    /** @var \App\Abstracts\Sensor[] */
    private $sensors;
    
    public function __construct() {
        $this->sensors = [];
    }

    public function add($id, App\Abstracts\Sensor $sensor) {
        $this->sensors[$id] = $sensor;
    }

    public function getReading($id) {
        return $this->sensors[$id]->read();
    }

    public function getReadings() {
        foreach ($this->data as $id => $sensor) {
            $data[$id] = $sensor->read();
        }
        
        return $data;
    }

}
