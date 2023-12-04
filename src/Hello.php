<?php

namespace Hello\App;

class Hello {
    private function getMessage(){
        return "Hello World";
    }

    public function talk(){
        return $this -> getMessage();
    }
}