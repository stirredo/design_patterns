<?php


namespace DesignPatterns\Creational\AbstractFactoryPattern\Pizzas;


use DesignPatterns\Creational\AbstractFactoryPattern\Cheese\AbstractCheese;
use DesignPatterns\Creational\AbstractFactoryPattern\Clam\AbstractClam;
use DesignPatterns\Creational\AbstractFactoryPattern\Dough\AbstractDough;
use DesignPatterns\Creational\AbstractFactoryPattern\Pepperoni\AbstractPepperoni;
use DesignPatterns\Creational\AbstractFactoryPattern\Sauce\AbstractSauce;
use DesignPatterns\Creational\AbstractFactoryPattern\Veggies\AbstractVeggie;

abstract class AbstractPizza
{
    public string $name;
    public AbstractSauce $sauce;
    public AbstractVeggie $veggie;
    public AbstractCheese $cheese;
    public AbstractPepperoni $pepperoni;
    public AbstractClam $clam;
    public AbstractDough $dough;

    abstract function prepare();



    public function bake()
    {
        return "baking pizza..";
    }

    public function cut()
    {
        return "Cutting pizza...";
    }

    public function box()
    {
        return "Boxing pizza";
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}