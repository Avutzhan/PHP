<?php


namespace App\Adapter\Interfaces;


interface MediaLibraryInterface
{
    public function upload($pathToFile);

    public function get($fileCode);
}