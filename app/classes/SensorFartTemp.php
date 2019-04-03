<?php

namespace App;

class SensorFartTemp extends Abstracts\Sensor {

    public function read() {
        $this->reading = rand(365, 425) / 10;
        
        return $this->reading;
    }

}
