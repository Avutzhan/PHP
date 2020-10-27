<?php


namespace App\Builder\Interfaces;


interface BlogPostBuilderInterface
{
    public function create();

    public function setTitle($val);

    public function setBody($val);

    public function setCategories($val);

    public function setTags($val);

    public function getBlogPost();

}