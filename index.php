<?php 

class Girl {
    
    public function beSmart() {
        return 'Im Smart';
    }
    
    public function beBeatiful() {
        return 'Im Beautiful';
    }
}

class Girlfriend extends Girl {
    public function pistiProta() {
        return 'Ka ten palaikinai fb?';
    }
}

class Wife extends Girlfriend {
    public function pistiProta() {
        return 'Ne dabar. As pavargus';
    }
}
