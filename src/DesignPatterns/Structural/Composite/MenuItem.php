<?php


namespace DesignPatterns\Structural\Composite;


class MenuItem extends MenuComponent
{

    public function __construct(public string $name, public string $description, public bool $is_vegetarian, public float $price)
    {}


    public function print()
    {
        $is_vegetarian = $this->is_vegetarian ? "(v)" : "";
        return "$this->name $this->is_vegetarian - $this->description - $this->price";
    }



}