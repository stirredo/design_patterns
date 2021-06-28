<?php


namespace DesignPatterns\Behavioral\TemplateMethodPattern;


abstract class CaffeineBeverage
{
    public array $algoRecord = [];
    final public function prepareRecipe()
    {

        $this->algoRecord[] = $this->boilWater();
        $this->algoRecord[] = $this->brew();
        $this->algoRecord[] = $this->pourInCup();
        $this->algoRecord[] = $this->addCondiments();
    }

    public function boilWater()
    {
        return "Boiling Water";
    }

    public function pourInCup()
    {
        return "Pouring in cup";
    }

    public abstract function brew();

    public abstract function addCondiments();

}