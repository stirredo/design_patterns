<?php


namespace DesignPatterns\Creational\AbstractFactoryPattern\PizzaIngredientFactory;


use DesignPatterns\Creational\AbstractFactoryPattern\Cheese\AbstractCheese;
use DesignPatterns\Creational\AbstractFactoryPattern\Clam\AbstractClam;
use DesignPatterns\Creational\AbstractFactoryPattern\Dough\AbstractDough;
use DesignPatterns\Creational\AbstractFactoryPattern\Pepperoni\AbstractPepperoni;
use DesignPatterns\Creational\AbstractFactoryPattern\Sauce\AbstractSauce;

interface PizzaIngredientFactory
{
    public function createDough(): AbstractDough;
    public function createSauce(): AbstractSauce;
    public function createCheese(): AbstractCheese;
    public function createVeggies(): array;
    public function createPepperoni(): AbstractPepperoni;
    public function createClam(): AbstractClam;

}