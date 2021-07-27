<?php


namespace DesignPatterns\Practice\MakeMultiplePatternsWorkTogether;


class Flock implements DuckIterator
{

    private $array = [];
    private $index = 0;

    public function add(Quackable $quackable)
    {
        $this->array[] = $quackable;
    }

    public function hasNext()
    {
        return ($this->index + 1) <= count($this->array);
    }

    public function next()
    {
        $duck = $this->array[$this->index];
        $this->index++;
        return $duck;
    }

}