<?php

class DBLogger implements ILogger {
    private function saveToDB($message) {
        //...
    }

    public function log($message) {
        $this->saveToDB($message);
    }


}