<?php

class Product {

    private $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }

    public function setPrice() {
        try {
            //save price in db
        } catch (DBException $e) {
            $this->logger->log($e->getMessage());
        }
    }
}