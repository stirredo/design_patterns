<?php


namespace DesignPatterns\Structural\Flyweight;


class ImageFlyweightFactory
{
    public $cache = [];

    public function get(string $filename)
    {
        if (array_key_exists($filename, $this->cache)) {
            return $this->cache[$filename];
        } else {
            $image = new ConcreteImageFlyweight($filename);
            $this->cache[$filename] = $image;
            return $image;
        }

    }

}