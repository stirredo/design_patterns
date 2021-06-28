<?php


namespace DesignPatterns\Behavioral\TemplateMethodPattern;


class Coffee extends CaffeineBeverage
{

    public function brew()
    {
        return "Brewing coffee in boiling water";
    }

    public function addCondiments()
    {
        return "Adding sugar and milk";
    }
}