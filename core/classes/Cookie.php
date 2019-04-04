<?php

namespace Core;

class Cookie extends \Core\Abstracs\Cookie {

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function delete(): void {
        
    }

    public function exists(): bool {
        return isset($_COOKIE[$this->name]);
    }

    public function read(): array {
        if ($this->exists()) {
            $decode = json_decode($_COOKIE[$this->name]);

            if ($decode) {
                return $decode;
            }
            trigger_error('Nepavyko decodint', E_USER_WARNING);
        }

        return [];
    }

    public function save($data, $expires_in = 3600): void {
        
    }

}
