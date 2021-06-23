<?php


namespace DesignPatterns\Creational\AbstractFactoryPattern\Pizzas;


use DesignPatterns\Creational\AbstractFactoryPattern\PizzaIngredientFactory\PizzaIngredientFactory;

class PineApplePizza extends AbstractPizza
{

    protected PizzaIngredientFactory $ingredientFactory;
    /**
     * CheesePizza constructor.
     */
    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;

    }


    function prepare()
    {
        echo "Preparing " . $this->name;
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
    }
}