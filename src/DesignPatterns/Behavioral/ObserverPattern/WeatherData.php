<?php


namespace DesignPatterns\Behavioral\ObserverPattern;


use SplObjectStorage;

class WeatherData implements Subject
{
    private $temperature;
    private $humidity;
    private $pressure;

    private SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }


    /**
     * @return mixed
     */
    public function getTemperature()
    {
        return $this->temperature;
    }



    /**
     * @return mixed
     */
    public function getHumidity()
    {
        return $this->humidity;
    }


    /**
     * @return mixed
     */
    public function getPressure()
    {
        return $this->pressure;

    }

    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    public function measurementsChanged()
    {
        $this->notify();

    }


    public function attach(Observer $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(Observer $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}