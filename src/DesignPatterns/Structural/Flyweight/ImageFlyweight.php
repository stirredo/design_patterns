<?php


namespace DesignPatterns\Structural\Flyweight;


abstract class ImageFlyweight
{
    // the filename is the intrinsic, meaning the shareable data
    public function __construct(public string $filename)
    {

    }

    abstract function render(int $width, int $height);
}