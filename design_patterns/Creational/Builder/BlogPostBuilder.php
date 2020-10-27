<?php


namespace App\Builder;


use App\Builder\Classes\BlogPost;
use App\Builder\Interfaces\BlogPostBuilderInterface;

class BlogPostBuilder implements BlogPostBuilderInterface
{
    private $blogPost;

    public function __construct()
    {
        $this->create();
    }

    public function create()
    {
        $this->blogPost = new BlogPost();

        return $this;
    }

    public function setTitle($val)
    {
        $this->blogPost->title = $val;

        return $this;
    }

    public function setBody($val)
    {
        $this->blogPost->body = $val;

        return $this;
    }

    public function setCategories($val)
    {
        $this->blogPost->categories = $val;

        return $this;
    }

    public function setTags($val)
    {
        $this->blogPost->tags = $val;

        return $this;
    }

    public function getBlogPost()
    {
        $result = $this->blogPost;
        $this->create();

        return $result;
    }
}