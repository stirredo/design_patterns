<?php


namespace DesignPatterns\Creational\AbstractFactoryPattern\PizzaIngredientFactory;


use DesignPatterns\Creational\AbstractFactoryPattern\Cheese\AbstractCheese;
use DesignPatterns\Creational\AbstractFactoryPattern\Cheese\ReggianoCheese;
use DesignPatterns\Creational\AbstractFactoryPattern\Clam\AbstractClam;
use DesignPatterns\Creational\AbstractFactoryPattern\Clam\FreshClams;
use DesignPatterns\Creational\AbstractFactoryPattern\Clam\FrozenClams;
use DesignPatterns\Creational\AbstractFactoryPattern\Dough\AbstractDough;
use DesignPatterns\Creational\AbstractFactoryPattern\Dough\ThinCrustDough;
use DesignPatterns\Creational\AbstractFactoryPattern\Pepperoni\AbstractPepperoni;
use DesignPatterns\Creational\AbstractFactoryPattern\Pepperoni\SlicedPepperoni;
use DesignPatterns\Creational\AbstractFactoryPattern\Sauce\AbstractSauce;
use DesignPatterns\Creational\AbstractFactoryPattern\Sauce\MarinaraSauce;
use DesignPatterns\Creational\AbstractFactoryPattern\Veggies\Garlic;
use DesignPatterns\Creational\AbstractFactoryPattern\Veggies\Mushroom;
use DesignPatterns\Creational\AbstractFactoryPattern\Veggies\Onion;
use DesignPatterns\Creational\AbstractFactoryPattern\Veggies\RedPepper;

class ChicagoPizzaIngredientsFactory implements PizzaIngredientFactory
{

    public function createDough(): AbstractDough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): AbstractSauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): AbstractCheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies(): array
    {
        $veggies[] = [new Garlic(), new Onion(), new Mushroom(), new RedPepper()];
        return $veggies;
    }

    public function createPepperoni(): AbstractPepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): AbstractClam
    {
        return new FrozenClams();
    }
}