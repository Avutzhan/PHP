<?php

class FileLogger implements ILogger {
    private function saveToFile($message) {
        //...
    }

    public function log($message) {
        $this->saveToFile($message);
    }


}