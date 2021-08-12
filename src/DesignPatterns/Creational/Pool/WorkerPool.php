<?php


namespace DesignPatterns\Creational\Pool;


class WorkerPool implements \Countable
{

    private array $occupitedWorkers = [];

    private array $freeWorkers = [];

    public function get(): StringReverseWorker
    {
        if (count($this->freeWorkers) === 0) {
            $worker =  new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }

        $this->occupitedWorkers[spl_object_hash($worker)] = $worker;
        return $worker;
    }

    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);
        if (isset($this->occupitedWorkers[$key])) {
            unset($this->occupitedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }


    /**
     * @inheritDoc
     */
    public function count()
    {
        return count($this->occupitedWorkers) + count($this->freeWorkers);
    }
}