<?php


namespace App\Adapter\Classes;

use App\Adapter\Interfaces\MediaLibraryInterface;
use Barryvdh\Debugbar\Facade as Debugbar;

class MediaLibrarySelfWritten implements MediaLibraryInterface
{
    public function upload($pathToFile)
    {
        Debugbar::info(__METHOD__);

        return md5(__METHOD__ . $pathToFile);

    }

    public function get($fileCode)
    {
        Debugbar::info(__METHOD__);

        return '';
    }
}