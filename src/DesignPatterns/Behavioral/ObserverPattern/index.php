<?php

include_once "../../../start.php";

$weatherDisplay = new \DesignPatterns\Behavioral\ObserverPattern\WeatherDisplay();

$weatherData = new \DesignPatterns\Behavioral\ObserverPattern\WeatherData();
$weatherData->attach($weatherDisplay);


// when we setMeasurements $weatherDisplay's update is triggered
$weatherData->setMeasurements(10, 12, 15);

// once it is detached as a observer, the update isn't triggered
$weatherData->detach($weatherDisplay);

$weatherData->setMeasurements(4, 5, 7);



