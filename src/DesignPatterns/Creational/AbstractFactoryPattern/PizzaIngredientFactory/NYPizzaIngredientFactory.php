<?php


namespace DesignPatterns\Creational\AbstractFactoryPattern\PizzaIngredientFactory;


use DesignPatterns\Creational\AbstractFactoryPattern\Cheese\AbstractCheese;
use DesignPatterns\Creational\AbstractFactoryPattern\Cheese\MozzarellaCheese;
use DesignPatterns\Creational\AbstractFactoryPattern\Clam\AbstractClam;
use DesignPatterns\Creational\AbstractFactoryPattern\Clam\FreshClams;
use DesignPatterns\Creational\AbstractFactoryPattern\Dough\AbstractDough;
use DesignPatterns\Creational\AbstractFactoryPattern\Dough\ThickCrustDough;
use DesignPatterns\Creational\AbstractFactoryPattern\Pepperoni\AbstractPepperoni;
use DesignPatterns\Creational\AbstractFactoryPattern\Pepperoni\SlicedPepperoni;
use DesignPatterns\Creational\AbstractFactoryPattern\Sauce\AbstractSauce;
use DesignPatterns\Creational\AbstractFactoryPattern\Sauce\PlumTomatoSauce;
use DesignPatterns\Creational\AbstractFactoryPattern\Veggies\EggPlant;
use DesignPatterns\Creational\AbstractFactoryPattern\Veggies\Garlic;
use DesignPatterns\Creational\AbstractFactoryPattern\Veggies\Mushroom;
use DesignPatterns\Creational\AbstractFactoryPattern\Veggies\Onion;

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{

    public function createDough(): AbstractDough
    {
        return new ThickCrustDough();
    }

    public function createSauce(): AbstractSauce
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): AbstractCheese
    {
        return new MozzarellaCheese();
    }

    public function createVeggies(): array
    {
        $veggies[] = [new Garlic(), new Onion(), new Mushroom(), new EggPlant()];
        return $veggies;
    }

    public function createPepperoni(): AbstractPepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): AbstractClam
    {
        return new FreshClams();
    }
}