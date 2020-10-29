<?php

namespace App\Http\Controllers;

use App\Adapter\Classes\MediaLibraryAdapter;
use App\Adapter\Classes\MediaLibrarySelfWritten;
use App\Adapter\Interfaces\MediaLibraryInterface;
use App\ObjectPool\ObjectPoolDemo;
use Barryvdh\Debugbar\Facade as Debugbar;

class CreationalPatternsController extends Controller
{
    public function Adapter()
    {
        $name = "Adapter";

//        $mediaLibrary = app(MediaLibrarySelfWritten::class);
//        $mediaLibrary = app(MediaLibraryAdapter::class);

        $mediaLibrary = app(MediaLibraryInterface::class);

        $result[] = $mediaLibrary->upload('imageFile');

        $result[] = $mediaLibrary->get('imageFile');

        return view('welcome');
    }
}
