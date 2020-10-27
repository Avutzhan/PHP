<?php


namespace App\Builder;


class BlogPostManager
{
    private $builder;

    public function setBuilder($builder)
    {
        $this->builder = $builder;

        return $this;
    }

    public function createCleanPost()
    {
        $blogPost = $this->builder->getBlogPost();

        return $blogPost;
    }

    public function createNewPostIt()
    {
        $blogPost = $this->builder
            ->setTitle('new post about IT')
            ->setBody('new post about IT')
            ->setCategories([
                'it_category'
            ])
            ->setTags([
                'tag_it',
                'tag_programming',
            ])
            ->getBlogPost();

        return $blogPost;
    }

    public function createNewPostCats()
    {
        $blogPost = $this->builder
            ->setTitle('new post about Cats')
            ->setBody('new post about Cats')
            ->setCategories([
                'cats_category',
                'pets_category',
            ])
            ->setTags([
                'tag_cats',
                'tag_pets',
            ])
            ->getBlogPost();

        return $blogPost;
    }


}