<?php


namespace DesignPatterns\Behavioral\ObserverPattern;


class WeatherDisplay implements DisplayElement, Observer
{

    public WeatherData $weatherData;

    public function display()
    {
        echo "The current temperate is: " . $this->weatherData->getTemperature() . "\n";
        echo "The current humidity is: " . $this->weatherData->getHumidity() . "\n";
        echo "The current pressure is: " . $this->weatherData->getPressure() . "\n";
    }

    public function update(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->display();
    }
}