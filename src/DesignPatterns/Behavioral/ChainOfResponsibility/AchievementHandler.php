<?php


namespace DesignPatterns\Behavioral\ChainOfResponsibility;


abstract class AchievementHandler
{
    /**
     * @var mixed|null
     */
    protected mixed $nextHandler;
    protected $request;
    protected array $recorder = [];

    public function __construct(AchievementHandler $nextHandler = null)
    {
        $this->nextHandler = $nextHandler;
    }

    public function processHandle($request)
    {
        $this->recorder[] = $this->handle($request);
        if ($this->nextHandler != null) {
            $this->recorder = array_merge($this->recorder, $this->nextHandler->processHandle($request));
        }

        return $this->recorder;
    }

    protected abstract function handle($request): string;
}