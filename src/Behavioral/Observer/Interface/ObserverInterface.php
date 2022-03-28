<?php

namespace App\Behavioral\Observer\Interface;

interface ObserverInterface
{
    public function update(ObservableInterface $observable): void;
}