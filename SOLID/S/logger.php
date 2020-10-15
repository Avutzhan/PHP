<?php

// У этого класса одна обязанность логировать сообщения
class Logger {
    public function log($message) {
        $this->saveToFile($message);
    }
}