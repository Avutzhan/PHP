<?php

interface Strategy
{
    public function doAlgorithm(array $data): array;
}