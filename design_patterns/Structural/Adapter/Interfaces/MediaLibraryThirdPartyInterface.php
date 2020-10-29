<?php


namespace App\Adapter\Interfaces;


interface MediaLibraryThirdPartyInterface
{
    public function addMedia($pathToFile);

    public function getMedia($fileCode);

}