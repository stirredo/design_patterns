<?php


namespace DesignPatterns\Behavioral\Iterator\Menus;


class MenuItem
{

    public function __construct(public string $name, public string $description, public bool $is_vegetarian, public float $price)
    {}




}