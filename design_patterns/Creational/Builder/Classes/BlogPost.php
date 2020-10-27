<?php


namespace App\Builder\Classes;


class BlogPost
{
    public $title;

    public $body;

    public $tags = [];

    public $categories = [];

    // Стандарное создание обьекта затруднительна изза множества свойств обьекта
    // мы просто выносим логику создания обьекта в вспомогательный класс
//    public function __construct($title, $body, $categories = [], $tags = [])
//    {
//        $this->title = $title;
//        $this->body = $body;
//        $this->categories = $categories;
//        $this->tags = $tags;
//    }
}