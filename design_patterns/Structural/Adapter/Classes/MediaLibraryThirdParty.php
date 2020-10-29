<?php


namespace App\Adapter\Classes;


use App\Adapter\Interfaces\MediaLibraryThirdPartyInterface;
use Barryvdh\Debugbar\Facade as Debugbar;

class MediaLibraryThirdParty implements MediaLibraryThirdPartyInterface
{
    public function addMedia($pathToFile)
    {
        Debugbar::info(__METHOD__);

        return '';
    }

    public function getMedia($fileCode)
    {
        Debugbar::info(__METHOD__);

        return '';
    }

    public function newMethod()
    {
        Debugbar::info(__METHOD__);
    }
}