<?php


namespace DesignPatterns\Structural\Flyweight;


class ConcreteImageFlyweight extends ImageFlyweight
{
    // the width and height are the extrinsic, meaning non-shareable data
    public function render(int $width, int $height)
    {
        return "<image src='{$this->filename}' width='{$width}' height='{$height}' />";
    }
}