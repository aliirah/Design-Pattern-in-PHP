<?php

namespace App\Behavioral\Observer\Interface;

interface ObservableInterface
{
    public function register(ObserverInterface $observer): void;
    public function unregister(ObserverInterface $observer): void;
    public function notify(): void;
}