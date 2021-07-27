<?php

namespace DesignPatterns\Practice\MakeMultiplePatternsWorkTogether\Tests;

use DesignPatterns\Practice\MakeMultiplePatternsWorkTogether\DuckFactory;
use DesignPatterns\Practice\MakeMultiplePatternsWorkTogether\DuckToy;
use DesignPatterns\Practice\MakeMultiplePatternsWorkTogether\Flock;
use DesignPatterns\Practice\MakeMultiplePatternsWorkTogether\Goose;
use DesignPatterns\Practice\MakeMultiplePatternsWorkTogether\GooseAdapter;
use DesignPatterns\Practice\MakeMultiplePatternsWorkTogether\MallardDuck;
use DesignPatterns\Practice\MakeMultiplePatternsWorkTogether\Quackable;
use DesignPatterns\Practice\MakeMultiplePatternsWorkTogether\QuackCounter;
use DesignPatterns\Practice\MakeMultiplePatternsWorkTogether\Quackologist;
use PHPUnit\Framework\TestCase;

class MultiplePatternTest extends TestCase
{
    /**
     * @test
     */
    public function goose_adapter_can_make_a_goose_go_quack()
    {
        $duck_toy = new DuckToy();
        $this->assertInstanceOf(Quackable::class, $duck_toy);
        $mallard = new MallardDuck();
        $this->assertInstanceOf(Quackable::class, $mallard);
        $goose = new Goose();
        $goose_that_quacks = new GooseAdapter($goose);
        $this->assertInstanceOf(Quackable::class, $goose_that_quacks);


    }

    /**
     * @test
     */
    public function quack_counter_decorator_tracks_how_many_quacks_we_have_heard()
    {
        $duck_toy = new QuackCounter(new DuckToy());
        $mallard = new QuackCounter(new MallardDuck());

        $duck_toy->quack();
        $duck_toy->quack();
        $mallard->quack();

        $this->assertEquals(3, QuackCounter::$count);

    }
    
    /**
     * @test
     */
    public function abstract_duck_factory_makes_all_duck_instances_use_quack_counter_decorator()
    {
        $factory = new DuckFactory();
        $duck_toy = $factory->createDuckToy();
        $mallard = $factory->createMallardDuck();
        $this->assertInstanceOf(QuackCounter::class, $duck_toy);
        $this->assertInstanceOf(QuackCounter::class, $mallard);
    }


    /**
     * @test
     */
    public function iterator_pattern_allows_us_maintain_a_flock_of_ducks()
    {
        $flock = new Flock();
        $flock->add(new DuckToy());
        $flock->add(new DuckToy());
        $flock->add(new DuckToy());
        $flock->add(new MallardDuck());
        $flock->add(new MallardDuck());
        $flock->add(new MallardDuck());
        $recorder = [];
        while ($flock->hasNext()) {
            $duck = $flock->next();
            $recorder[] = $duck->quack();
        }

        $this->assertCount(6, $recorder);
    }
    
    /**
     * @test
     */
    public function duck_observer_tells_quackologist_when_a_duck_quacks()
    {
        $duck_toy = new DuckToy();

        $observer = new Quackologist();
        $duck_toy->attach($observer);
        $duck_toy->quack();
        $this->assertSame(['Duck Toy just quacked!'], $observer->recorder);
    }

}
