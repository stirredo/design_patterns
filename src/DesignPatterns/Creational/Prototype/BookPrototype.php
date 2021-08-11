<?php


namespace DesignPatterns\Creational\Prototype;


abstract class BookPrototype
{
    protected string $title;
    protected string $category;


    abstract public function __clone();

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title =  $title;
    }

}