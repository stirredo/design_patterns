<?php

namespace DesignPatterns\Behavioral\TemplateMethodPattern\Tests;

use DesignPatterns\Behavioral\TemplateMethodPattern\Coffee;
use DesignPatterns\Behavioral\TemplateMethodPattern\Tea;
use PHPUnit\Framework\TestCase;

class TemplateMethodPatternTest extends TestCase
{

    /**
     * @test
     */
    public function tea_beverage_has_its_own_recipe()
    {
        $tea = new Tea();
        $tea->prepareRecipe();
        $this->assertSame(["Boiling Water", "Steeping the tea", "Pouring in cup", "Adding lemon"], $tea->algoRecord);
    }

    /**
     * @test
     */
    public function coffee_beverage_has_its_own_recipe()
    {
        $coffee = new Coffee();
        $coffee->prepareRecipe();
        $this->assertSame(["Boiling Water", "Brewing coffee in boiling water", "Pouring in cup", "Adding sugar and milk"], $coffee->algoRecord);

    }
    
}
