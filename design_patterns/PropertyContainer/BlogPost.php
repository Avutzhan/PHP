<?php


namespace App\PropertyContainer;

//Есть начальный класс в который мы не хотим добавлять новые свойства и изменять его
//Можно реализовать по разному но суть одна дополнительные свойства добавляются динамически
//вместо того чтобы менять сам класс мы добавляем новые свойства в
//некоторый контейнер свойств непосредственно в самом обьекте
class BlogPost extends PropertyContainer
{
    private $title;

    private $category_id;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getCategory()
    {
        return $this->category_id;
    }

    public function setCategory($id)
    {
        $this->category_id = $id;
    }


}