<?php


namespace DesignPatterns\Creational\Pool;


class StringReverseWorker
{
    public function __construct()
    {
    }

    public function run(string $str)
    {
        return strrev($str);
    }

}