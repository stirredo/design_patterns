<?php


namespace DesignPatterns\Structural\Adapter;


class Turkey implements TurkeyInterface
{

    public function gobble()
    {
        return "Gobble Gobble";
    }

    public function fly()
    {
        return "I am flying but for a short time";
    }
}