<?php


namespace DesignPatterns\Behavioral\Mediator;


use Throwable;

class NotEnoughQuantityException extends \Exception
{

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}