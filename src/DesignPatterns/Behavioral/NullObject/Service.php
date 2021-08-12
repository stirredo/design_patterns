<?php


namespace DesignPatterns\Behavioral\NullObject;


class Service
{
    const WE_ARE_DOING_SOMETHING_STR = 'We are doing something';

    public function __construct(private Logger $logger)
    {
    }

    public function doSomething()
    {
        $this->logger->log(self::WE_ARE_DOING_SOMETHING_STR);
    }
}