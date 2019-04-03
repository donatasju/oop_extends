<?php

namespace App;

class SensorFartHumidity extends Abstracts\Sensor {

    public function read() {
        $this->reading = rand(0, 100) . '%';

        return $this->reading;
    }

}
