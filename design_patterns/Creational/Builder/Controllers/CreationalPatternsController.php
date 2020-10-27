<?php

namespace App\Http\Controllers;

use App\Builder\BlogPostBuilder;
use App\Builder\BlogPostManager;
use App\Multiton\SimpleMultiton;
use App\Multiton\SimpleMultitonNext;
use Barryvdh\Debugbar\Facade as Debugbar;

class CreationalPatternsController extends Controller
{
    public function Builder()
    {
        $name = "Builder";

        $builder = new BlogPostBuilder();

        $posts[] = $builder->setTitle('from Builder')
                        ->getBlogPost();

        $manager = new BlogPostManager();
        $manager->setBuilder($builder);

        $posts[] = $manager->createCleanPost();
        $posts[] = $manager->createNewPostIt();
        $posts[] = $manager->createNewPostCats();

        Debugbar::info($posts);

        return view('welcome');
    }
}
