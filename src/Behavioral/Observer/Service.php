<?php

namespace App\Behavioral\Observer;

use App\Behavioral\Observer\Interface\ObservableInterface;
use App\Behavioral\Observer\Interface\ObserverInterface;

class Service implements ObserverInterface
{
    protected string $name;
    protected int $priority;

    /**
     * @param string $name
     * @param int $priority
     */
    public function __construct(string $name, int $priority)
    {
        $this->name = $name;
        $this->priority = $priority;
    }

    public function update(ObservableInterface $observable): void
    {
        print_r("<p>{$this->name} : {$observable->getEvent()}</p>");
    }
}