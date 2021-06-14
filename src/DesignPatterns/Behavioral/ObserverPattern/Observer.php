<?php


namespace DesignPatterns\Behavioral\ObserverPattern;


interface Observer
{
    public function update(WeatherData $weatherData);
}