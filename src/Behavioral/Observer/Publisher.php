<?php

namespace App\Behavioral\Observer;

use App\Behavioral\Observer\Interface\ObservableInterface;
use App\Behavioral\Observer\Interface\ObserverInterface;

class Publisher implements ObservableInterface
{
    protected string $event;
    protected array $observers;

    /**
     * @param string $event
     * @return void
     */
    public function setEvent(string $event): void
    {
        $this->event = $event;
        $this->notify();
    }

    /**
     * @return string
     */
    public function getEvent(): string
    {
        return $this->event;
    }

    public function register(ObserverInterface $observer): void
    {
        $observerKey = spl_object_hash($observer);
        $this->observers[$observerKey] = $observer;
    }

    public function unregister(ObserverInterface $observer): void
    {
        $observerKey = spl_object_hash($observer);
        unset($this->observers[$observerKey]);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}