<?php

namespace DesignPatterns\Structural\Flyweight\Tests;

use DesignPatterns\Structural\Flyweight\ConcreteImageFlyweight;
use DesignPatterns\Structural\Flyweight\ImageFlyweightFactory;
use PHPUnit\Framework\TestCase;

class FlyweightTest extends TestCase
{
    /**
     * @test
     */
    public function flyweight_enables_us_to_create_and_render_various_images_while_creating_limited_objects()
    {
        $htmlStringRecorder = [];
        $image_factory = new ImageFlyweightFactory();
        $image_file1 = $image_factory->get('file1.jpg');
        $htmlStringRecorder[] = $image_file1->render(10, 11);
        $htmlStringRecorder[] = $image_file1->render(10, 14);
        $htmlStringRecorder[] = $image_file1->render(10, 9);
        $image_file2 = $image_factory->get('file2.jpg');
        $htmlStringRecorder[] = $image_file2->render(10, 9);
        $htmlStringRecorder[] = $image_file2->render(20, 9);
        $htmlStringRecorder[] = $image_file2->render(30, 9);
        $htmlStringRecorder[] = $image_file2->render(40, 9);


        // number of images only 2, but rendered 7 times differently - magic of flyweight

        // This pattern is more useful in GUI programs than PHP
        $this->assertEquals(count($image_factory->cache), 2);
        $this->assertEquals(count($htmlStringRecorder), 7);




    }
}
